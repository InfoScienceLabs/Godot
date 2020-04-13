#!/usr/bin/env python3
# -*- coding: utf-8 -*-


from peewee import MySQLDatabase
from peewee import CharField
from peewee import DateField
from peewee import Model
from peewee import IntegerField
from peewee import ForeignKeyField
from peewee import BooleanField
import datetime

db = MySQLDatabase("<db_name>",
                   host="localhost",
                   port=3306,
                   user="",
                   passwd="")


class MySQLModel(Model):
    """A base model that will use our MySQL database"""
    class Meta:
        database = db


class Feeder(MySQLModel):
    """"Model holding complete data that needs to be scraped"""
    command = CharField()
    part = CharField()
    url = CharField()
    target = CharField()
    ipaddr = CharField(null=True)
    status = CharField(null=True)
    # assigned            = DateField(null = True,default=datetime.date.today)
    # fulfilled           = DateField(null = True,default=datetime.date.today)
    assigned = CharField()
    fulfilled = CharField()

    class Meta:
        table_name = 'feed'


class Accounty(MySQLModel):
    """Model holding DO account information"""
    acc_name = CharField()
    api_key = CharField()
    total_units = IntegerField()
    droplets_running = IntegerField()
    fips = IntegerField()
    fip_assigned = IntegerField()
    fip_enabled = IntegerField()
    snapid = IntegerField()


class Unity(MySQLModel):
    """Model Holding per droplet settings and information"""
    ip = CharField()
    name = CharField()
    status = CharField()
    region = CharField()
    uid = IntegerField()  # droplet_id
    feeds = IntegerField()
    acid = ForeignKeyField(Accounty, to_field="id")
    kill = BooleanField(default=False)
    killed = CharField()

Feeder.create_table()
Accounty.create_table()
Unity.create_table()




