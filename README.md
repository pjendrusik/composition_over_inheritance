Function abstract over an actions.
Objects abstract over state and methods.

Inheritance is when you design your types around WHAT they ARE.

Composition is when you design your types around WHAT they DO.


Requires:

1. We have animals:

    - Dog
    - Cat
    
    1.1 Animals behaviours:
    
     - Dog can bark and poop
     - Cat can meow and poop
     
2. We have two robots:

    - Cleaning robot
    - Murder robot
    
    2.1 Robots behaviours
     - Cleaning robot can clean after animals and drive
     - Murder robot can kill animal and drive
     
3. Additional new requirement:
  
    3.1 Add murder robot dog, which can kill, drive and bark but can't poop.
    
    
Requires map:    

dog             = pooper + barker

cat             = pooper + meower

cleaningRobot   = driver + cleaner

murderRobot     = driver + killer

murderRobotDog  = driver + killer + barker
