#!/usr/bin/env python3
# -*- coding: utf-8 -*-

import digitalocean
import time


def get_regions(dtok=""):
    manager = digitalocean.Manager(token=dtok)
    regions = manager.get_all_regions()
    available = []
    for region in regions:
        if region.available and 's-1vcpu-2gb' in region.sizes:
            available.append(region.slug)
    return available


def create_droplet(dtok="", image='ubuntu-18-04-x64', _region=''):

    droplet = digitalocean.Droplet(token=dtok,
                                   name='child-{0}'.format(int(time.time())),
                                   region=_region,
                                   image=image,  # Ubuntu 14.04 x64
                                   backups=False,
                                   size_slug='s-1vcpu-2gb',
                                   tags=['demo', 'auto-testing'])
    droplet.create()
    for count in range(0, 5):
        actions = droplet.get_actions()
        action = actions[0]
        action.load()
        status = action.status
        print("creating droplet! status: " + status)
        action
        if status == 'completed':
            return droplet.id
    return False
    pass


def destroy_droplet(dtok="", d_id=""):
    manager = digitalocean.Manager(token=dtok)
    droplet = manager.get_droplet(d_id)
    return droplet.destroy()
    pass


def getDroplets(dtok=""):
    manager = digitalocean.Manager(token=dtok)
    my_droplets = manager.get_all_droplets()
    data = []
    for droplet in my_droplets:
        set = {}
        set['ip'] = droplet.ip_address
        set['name'] = droplet.name
        set['status'] = droplet.status
        set['region'] = droplet.region['name']
        set['id'] = droplet.id
        data.append(set)
    return data


def droplet_on(droplet_id):
    pass

