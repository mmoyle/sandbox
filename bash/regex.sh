#!/bin/bash

STACK_NAME=dev_idle

if [[ $STACK_NAME =~ ^.*_idle$ ]]; then
  echo "idle"
else
  echo "live"
fi
