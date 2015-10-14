#!/bin/bash

# Define a timestamp function
timestamp() {
  date +"%T"
}
echo ("change recorded at: " + timestamp) >> log.txt