#!/bin/bash

# echo "running build $1"

# echo "finished build"

# For the time being, just print the test file

# cat test1.txt

# Real thing

# echo $2

# NAME=$2
# FILE=$NAME.txt
FILE=output.txt

./sudoku create $1 > $FILE


cat $FILE
