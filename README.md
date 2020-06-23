# subzeta/pandemic-kata

Based upon https://github.com/carlosbuenosvinos/php-kata skeleton.

## How to

1. Clone this project.
2. Add your classes to 'src' and your test cases to 'tests'. 
3. Run 'php bin/phpunit' to run your tests.

## Pandemic Kata

Welcome to the Pandemic Kata. As you may know, we are a public research laboratory called every 
time the world fights against any disease. We have been recruited by the OMS to set the common rules 
for any interaction and person willing to leave its house. 

As you know, the world is under a global pandemic. The ideas to set the spread stopped are as follows:

* Every country has its time slot rules.
* Every person has an age value denoting the age grouping: child, adult, old.
* Every person has a health condition value denoting the health state: risky, healthy.
* Every person pertains to a family.
* Each age has a time slot to go outside (morning, noon, afternoon).

Pretty simple, right? All countries setted up common rules but different time slots. This is where it gets interesting:

* You are allowed to go out only on your time slot.
* Children (max 3) must go outside with a healthy adult. The child time slot commands over the adult one.
* A risky-health person must go outside with a healthy adult. The risky-health person time slot commands over the adult one.
* Healthy adults cannot group, but can go outsite at the same time.

### Age time slots

Spain, for example, setted up this ones:
| Age        | Time slot    |
| ------------- |-------------|
| Child      | 9am - 12am (morning) | 
| Adult      | 12am - 17pm (noon)      | 
| Old/risky  | 17pm - 21pm (afternoon)      | 

### Your task
As you may see, this is messed up for a large Spanish family having six kids and a risky-health person in charge. 
We must develop a brand new evaluator system to help this family figure out how to see the sun with the minimum time
slots consuming. This process receives a country and set of family members and just outputs the time slots along with the members allowed to go outside.

For example:

```
[
    'country' => 'Spain',
    'family' => [
        [
            'age'           => 'adult',
            'health-status' => 'healthy',
        ],
        [
            'age'           => 'child',
            'health-status' => 'healthy',
        ],
    ],
]
```

Should output:

```
[
    'morning' => [
        [
            [
                'age'           => 'adult',
                'health-status' => 'healthy',
            ],
            [
                'age'           => 'child',
                'health-status' => 'healthy',
            ],
        ]
    ]
]
```

Any doubts? Just ask. Have fun!
