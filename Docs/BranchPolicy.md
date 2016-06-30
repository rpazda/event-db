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
   * 
   
## Workflow

  * If this is the first time you are working with the repository, you will need to clone the development branch
    * This should be cloned to a location you can find, since this is where your copies of the branch files will be. It is a good idea to have a folder just for git projects
  *  Create a local branch from development with name formatted YOURNAME-DESCRIPTION (from here NB)
  *  Make the desired changes. This is where you modify, add, and/or delete files to work on the program
  *  Commit changes to branch and save all files
  *  Check out development branch
  *  Get latest changes to development. You can fetch to see the new commits, if any, or simply pull to bring the new code to your copy of the development branch
    * You may have to perform a merge if git runs into conflicts it cannot resolve. The desktop client should allow you to do this simply. Consult with other team members if unsure about what code to keep
  * Check out NB again and merge NB from development. This step makes sure your new code works with the existing code and any changes made since you originally made NB from development
    * During this step you should test the app to make sure all old functionality still works correctly and your new code does what you expect. This is called integration testing
  * Submit a pull request for NB to be merged to development
    * You should notify the team of the PR so they can review it to check for mistakes and learn about the new implementation
  * Once the changes have been approved the changes can be merged to development 
