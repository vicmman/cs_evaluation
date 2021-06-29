# Conversational System Evaluation
To conduct the evaluation, a set of 40 text-based dialogues between the system and a user (simulated patient) was generated. The generated dialogues are based on the topics over which the system has the ability to converse, generating two dialogues per topic. The set of dialogues was evaluated by a total of 11 people, who as selection criteria should be caregivers (n=9) or people related to patient care ( 1 geriatric doctor, and 1 care center assistant).

In order to make the set of generated dialogues available to the evaluators, a web form was created through which the evaluators had access to the set of dialogues (https://ylcnhgpssgf.typeform.com/to/BZcWGb6V), an example of one dialogue to be evaluated is shwoed in Figure 1. Once the evaluation process is concluded, a rating of votes is obtained for each of the candidate responses within each dialogue. 

![dialogue_example](https://user-images.githubusercontent.com/73979545/123838275-735a6300-d8d1-11eb-8e6f-e2e53f7a2a66.png)

**Figure 1**. Example of one dialogue were the evaluator selects the most appropriate response that the system should give.

## File Description
The conversational_system_evaluation.csv is the file where the evaluations were registered. Each row represents the evaluation made by one person. Column headings describe the response entered by the evaluator, for the name and e-mail fields the data were replaced with 'XX' for privacy reasons. Columns 6 to 45 describe the evaluations of the dialogues. The answers given by each evaluator within this fields were the selected from the set of candidate answers in each dialogue as shown in Table 1. In this case the responses correspond to the dialogue context showed in Figure 1.   

**Table 1**. Example of the responses selected by evaluators on one evaluated dialogue.
| Evaluator [E] | Selected response|
| :---: | :-----------: |
| E1 | <em> Así se habla, verá que vamos a pasar un rato muy agradable platicando</em> |
| E2 | <em>Muy bien, ¿le parece si platicamos un poquito sobre la familia?</em> |
| E3 | <em>Así se habla, verá que vamos a pasar un rato muy agradable platicando</em> |
| E4 | <em>Perfecto, vera que después de platicar un rato se siente mejor</em> |
| E5 | <em>Perfecto, vera que después de platicar un rato se siente mejor</em> |
| E6 | <em>Perfecto, vera que después de platicar un rato se siente mejor</em> |
| E7 | <em>Perfecto, vera que después de platicar un rato se siente mejor</em> |
| E8 | <em>Así se habla, verá que vamos a pasar un rato muy agradable platicando</em> |
| E9 | <em>Así se habla, verá que vamos a pasar un rato muy agradable platicando</em> |
| E10 | <em>¿De qué le gustaría platicar?</em> |
| E11 | <em>Así se habla, verá que vamos a pasar un rato muy agradable platicando</em> |

This has to be done for each of the 40 dialogues and its candidate responses. Once the evaluation process is concluded, a rating of votes is obtained for each of the candidate responses within each dialogue.
