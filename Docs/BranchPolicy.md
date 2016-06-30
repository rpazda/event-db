# Branch Policy

## Overview

This document covers the basics of branches with git, their methodology with regards to this project, and a procedure for working within the chosen strategy.

## Branches

### master
The master branch is the guaranteed working version of the project. 
   * Any changes made should be thoroughly tested before merging. 
   * Merges should only be made from development and only when it is in a well-tested state.

### development
The development branch is for the version of the project that is currently being worked on.
   * Changes should be tested before merging from feature branches
   * This branch is also for integration testing but individual new components should be tested before merging.
   * Allowed to become unstable but should be fixed ASAP

###[DeveloperName]-[FeatureDescription]
Branches from development should be created by team members for developing new functions.
   * Formatted as [NAME]-[DESCRIPTION]
   * NO SPACES ARE ALLOWED IN NAMES
   * Descriptions should be informative but brief
