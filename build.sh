#!/usr/bin/env bash
if [ $# -eq 0 ]
  then
    tag='latest'
  else
    tag=$1
fi

# Build
docker build -f docker/Dockerfile -t jkaninda/laravel-kubernetes-example-app:$tag .
