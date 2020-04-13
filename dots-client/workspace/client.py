#!/usr/bin/env python3
# -*- coding: utf-8 -*-

import requests
import subprocess
import time

import logging

import sentry_sdk
sentry_sdk.init("<DSN>")

# =============================================================================
# todo convert this logging to udp handler and log all messages on server side
# =============================================================================
# Create and configure logger
logging.basicConfig(filename="leecher.log",
                    format='%(asctime)s %(message)s',
                    filemode='a')
log = logging.getLogger()
log.setLevel(logging.DEBUG)

log.info("client Started!")

uid = None
while uid is None:
    response = requests.get('http://169.254.169.254/metadata/v1/id')
    if response.status_code == 200:
        uid = response.text
    time.sleep(10)
log.info("uid received:  "+uid)
excludes = ['rm', 'mv', 'cp']

BASE = 'http://server_ip:port'
AUTH = {'Authorization': 'Bearer KEY1'}


def processor(dataset):
    continuity = True

    for row in dataset:
        _id = row[0]
        comm = row[1]
        script = row[2]
        url = row[3]
        target = row[4]
        if comm in excludes:
            continue
        execute = comm, script, url, target
        proc = subprocess.run(execute)
        if not proc.returncode == 0:

            log.error("Script Error!")
            #handle script errors here


            time.sleep(120)
            reply = requests.get(BASE + '/notify/1?set=' +
                                 str(_id) + '&uid='+uid,
                                 headers=AUTH)
            if reply.status_code == 200:
                continuity = False
                break
        else:
            reply = requests.get(BASE + '/notify/2?set=' +
                                 str(_id) + '&uid='+uid,
                                 headers=AUTH)
            print(_id, reply.json())
            log.info("processed: " + _id)
    return continuity


while True:
    # log this dataset
    data = requests.get(BASE + '/notify/0?uid='+uid, headers=AUTH)
    if data.status_code == 200:
        if data.json().get('state', None) == 'wait':
            time.sleep(180)
            continue
        dataset = data.json().get('data', [])
        continuity = processor(dataset)
        if not continuity:
            # log this
            break

# run rsync to send all the data
# proc = subprocess()
# just to prevent the console being closed
stopper = input("stop it???")
