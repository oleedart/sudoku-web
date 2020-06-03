#!/bin/bash

# Runs the solver program for the output thats piped in

#echo running solver

# echo $1

# NAME=$1
# FILENAME=$NAME.txt
FILENAME=output.txt

if [ -f output.txt ]
then
    ./sudoku solve < $FILENAME
fi

#echo finished solver