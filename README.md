# NameGameAPI

This project provides a server for virtual "hats" to support Name Game as it is typically played by SWIL. It does not provide voice chat or anything else; it just simulates names in a hat that can be tossed on the floor when they're gotten.

IMPORTANT
=========

This project is not intended for end users; you will need to create a front end in order to use it.

To see the endpoints and objects provided, check out the openapi-namegame.json file in this repository. You can use this to generate client code with any OpenAPI v3 compatible generator, and/or look at auto-generated documentation by loading it into editor.swagger.io.

How to play a game
------------------

1. Setup
   
   1. Create a new Hat (POST /api/hats)
   1. Create a new Player for each Player (POST /api/players)
   1. Add names to the hat by creating new Names specifying the Hat ID from step 1, and Player ID (owner) from step 3. (POST /api/names)
1. Gameplay

   1. Draw a name from the hat by fetching all the ungotten names from a hat (POST /api/hats/{id}/names isGotten=false) THE CLIENT IS RESPONSIBLE FOR CHOOSING A RANDOM NAME FROM THE RESULT SET.
   1. If the name is gotten:
      1. update the name setting isGotten=true (PUT /api/names/{id} set isGotten=true)
      1. fetch a new name (see above)
   1. If the name is NOT gotten, do nothing!
