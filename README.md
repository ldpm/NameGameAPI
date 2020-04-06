# NameGameAPI

How to use
----------

1. Setup
   
   1. Create a new Hat
   1. Create a new Player for each Player
   1. Add names to the hat by creating new Names specifying the Hat ID from step 1.
1. Gameplay

   1. Draw a name from the hat by fetching a random name (hat ID, isGotten=false)
   1. If the name is gotten:
      1. update the name setting isGotten=true
      1. fetch a new name
   1. If the name is NOT gotten, do nothing!