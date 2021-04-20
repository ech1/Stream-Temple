#!/bin/bash

git config --global user.email "ech1@nowhere.com"
git config --global user.name "ech1"

while :
do
	git add -A
	git commit
	git push
done
