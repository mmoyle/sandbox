#!/bin/bash

function hello_func() {
  arg1=$1
  arg2=$2

  echo $arg1 $arg2
}

hello_func 'hello' 'world'
