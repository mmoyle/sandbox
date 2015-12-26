#!/bin/bash

BRANCH=origin/master/foo

BRANCH=${BRANCH//\//-}

echo $BRANCH

