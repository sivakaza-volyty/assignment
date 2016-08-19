# assignment

 **Story :**

        A hospital has 10 operatingrooms (OR’s).
        This hospital has 5 specialists in service that are scheduled to perform surgeries.
        It also has 5 anesthetists in service who sedate the patient at the beginning of the session.

        These sessions (the execution of an operation) can last from 1 to 4 hours.
        In a session there is one specialist and one or more anesthetists.

        Specialists and anesthetists are limitedly available (some work 40 hours, others 32).

* **Symfony Approach**

1. Check Entity properties and relations in the
   * **AssignmentBundle\Entity**,
   * **src/Appizens/AssignmentBundle/Resources/config/doctrine**

2. Below is the generated Model Diagram.

![image](https://github.com/sivakaza-volyty/assignment/blob/master/operation_theater_sessions.png)

3.Overview of the sessions and the specialists and the anesthetists that are scheduled per OR.
  * **Appizens\AssignmentBundle\SessionController\indexAction** (route : example.com/index)

4.overview of the sessions and OR’s of a specific specialist.
  * **Appizens\AssignmentBundle\SessionController\getSpecialistSessionsAction** (route: example.com/specialist_sessions/{specialistId} )

5.checks if a specialists available in a certain timeslot.
 * **Appizens\AssignmentBundle\SessionController\searchSpecialistAction** (route:  example.com/search_specialist)


# Tools Used Symfony Standard Edition