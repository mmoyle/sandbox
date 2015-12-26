#!/bin/bash

while getopts ":si" opt; do
  case $opt in
     s)
      echo "-s was triggered!" >&2
      ;;
     i)
      echo "-i was triggered!" >&2
      ;;
    \?)
      echo "Invalid option: -$OPTARG" >&2
      ;;
  esac
done
