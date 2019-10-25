# openCX-SG Development Report

# Welcome to the documentation pages of Confmark. Your Conference Landmark. **openCX**!

Here you will find all information about the (sub-)projects.
You can find here details about the (sub)product, hereby mentioned as module, from a high-level vision to low-level implementation decisions, a kind of Software Development Report (see template), organized by discipline (as of RUP):

* [Business modeling](#Business-modeling)
  * [Product Vision](#Product-Vision)
  * [Elevator Pitch](#Elevator-Pitch)
* [Requirements](#Requirements)
  * [Use Case Diagram](#Use-case-diagram)
  * [User stories](#User-stories)
  * [Domain model](#Domain-model)
* [Architecture and Design](#Architecture-and-design)
  * [Logical architecture](#Logical-architecture)
  * [Physical architecture](#Physical-architecture)
  * [Prototype](#Prototype)
* [Implementation](#Implementation)
* [Test](#Test)
* [Configuration and change management](#Configuration-and-change-management)
* [Project management](#Project-management)

So far, contributions are exclusively made by the initial team, but we hope to open them to the community, in all areas and topics: requirements, technologies, development, experimentation, testing, etc.

Please contact us!

Thank you!

Joanna Trojak, Sophia Bitterwolf, Tomasz Kubis, Filippo Gorlini and Iago Henrique Pires Moreira e Morais

## Business modeling

### Product Vision
Confmark. Your Conference Landmark.

Real-time overview of all necessary information about the conference at a glance presented on a screen.

### Elevator Pitch


## Requirements

### Use case diagram


### User stories

In order to create a user story map, we firstly collected all user stories which we want to integrate into our project.

The user stories can be find here:
https://miro.com/welcomeonboard/dmalSTGf8X3p5T2v4VESbecJT38uOLtBqfenEw2bFrV42k8iQbFQ806nvdHeUL4v

The sticky notes represent the user stories. 

We divided the tasks into 'information to know as soon as possible', meaning that the information is useful for the participant of the conference right now and 'information useful for later the day'.
As a third block, we try to create something that allows an interaction between the participant and the screen - 'Interaction with the screen'.
The three blocks are marked in blue.

Each of these blue blocks contain different subtasks that must be fulfilled. These are marked in yellow.
Below every subtask we collected the steps that must be fulfiled in order to implement the task.

Additionally we taged the different tasks with the labels 'priority 1-4'. Thus we know in which order we will work on the individual tasks. On top of these labels there are labels like 'in progress', 'done' or 'to-do'. This shows us the current working status of the task.

#### User interface mockups. 
The interface mockup can be found here:
https://drive.google.com/open?id=1NSQIgjhsON6PNz8A21Cl78HG2lJKbUey

#### Acceptance tests. 
The scenarios of the acceptance tests can be found here: 
https://docs.google.com/document/d/19Oh2CPSlyLhVsH65iyrFKrGMntYt6AbZ7Bw0rdgcYr4/edit?usp=sharing

Currently we are working on the must have scenarios, things which are the most crucial to the user. 

### Domain model
To better understand the context of the software system, it is very useful to have a simple UML class diagram with all the key concepts (names, attributes) and relationships involved of the problem domain addressed by your module.

## Architecture and Design
The architecture of a software system encompasses the set of key decisions about its overall organization.

A well written architecture document is brief but reduces the amount of time it takes new programmers to a project to understand the code to feel able to make modifications and enhancements.

To document the architecture requires describing the decomposition of the system in their parts (high-level components) and the key behaviors and collaborations between them.

In this section you should start by briefly describing the overall components of the project and their interrelations. You should also describe how you solved typical problems you may have encountered, pointing to well-known architectural and design patterns, if applicable.

### Logical architecture
The purpose of this subsection is to document the high-level logical structure of the code, using a UML diagram with logical packages, without the worry of allocating to components, processes or machines.

It can be beneficial to present the system both in a horizontal or vertical decomposition:

horizontal decomposition may define layers and implementation concepts, such as the user interface, business logic and concepts;
vertical decomposition can define a hierarchy of subsystems that cover all layers of implementation.

### Physical architecture
The goal of this subsection is to document the high-level physical structure of the software system (machines, connections, software components installed, and their dependencies) using UML deployment diagrams or component diagrams (separate or integrated), showing the physical structure of the system.

It should describe also the technologies considered and justify the selections made. Examples of technologies relevant for openCX are, for example, frameworks for mobile applications (Flutter vs ReactNative vs ...), languages to program with microbit, and communication with things (beacons, sensors, etc.).

### Prototype
To help on validating all the architectural, design and technological decisions made, we usually implement a vertical prototype, a thin vertical slice of the system.

In this subsection please describe in more detail which, and how, user(s) story(ies) were implemented.

## Implementation
Regular product increments are a good practice of product management. 

While not necessary, sometimes it might be useful to explain a few aspects of the code that have the greatest potential to confuse software engineers about how it works. Since the code should speak by itself, try to keep this section as short and simple as possible.

Use cross-links to the code repository and only embed real fragments of code when strictly needed, since they tend to become outdated very soon.

## Test
There are several ways of documenting testing activities, and quality assurance in general, being the most common: a strategy, a plan, test case specifications, and test checklists.

In this section it is only expected to include the following:

test plan describing the list of features to be tested and the testing methods and tools;
test case specifications to verify the functionalities, using unit tests and acceptance tests.
A good practice is to simplify this, avoiding repetitions, and automating the testing actions as much as possible.

## Configuration and change management
Configuration and change management are key activities to control change to, and maintain the integrity of, a project’s artifacts (code, models, documents).

For the purpose of ESOF, we will use a very simple approach, just to manage feature requests, bug fixes, and improvements, using GitHub issues and following the GitHub flow.

## Project management
Software project management is an art and science of planning and leading software projects, in which software projects are planned, implemented, monitored and controlled.

In the context of ESOF, we expect that each team adopts a project management tool capable of registering tasks, assign tasks to people, add estimations to tasks, monitor tasks progress, and therefore being able to track their projects.

Example of tools to do this are:

Trello.com
Github Projects
Pivotal Tracker
Jira
We recommend to use the simplest tool that can possibly work for the team.
