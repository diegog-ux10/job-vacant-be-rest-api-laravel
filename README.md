# API Documentation

## introduction

REST API for web aplication of work, whit vacancies and applies of multipler work.

## Applies Endpoints

### Get /api/job-applies

**Description**

Return all job applies resgistred in the database.

**Parameters**

No parameters needed.

**Response**

    {

        "name": "daniel",
        "email": "daniel@gmail.com",
        "user_id":2,
        "job_vacancy_id":3,
        "created_at": "2023-10-27T15:15:32.000000Z",
        "updated_at": "2023-10-27T15:15:32.000000Z"

    }

### Get /api/job-applies/:id

**Description**

Return a job applies for that id resgistred in the database.

**Parameters**

No parameters needed.

**Response**

    {

        "name": "daniel",
        "email": "daniel@gmail.com",
        "user_id":2,
        "job_vacancy_id":3,
        "created_at": "2023-10-27T15:15:32.000000Z",
        "updated_at": "2023-10-27T15:15:32.000000Z"

    }

### POST /api/job-applies

**Description**

Create a new job apply

**Parameters**

No parameters needed.

**Resquest**

    {
        "name": "daniel"
    }

**Response**

    {
        "name": "daniel",
        "email": "daniel@gmail.com",
        "user_id":2,
        "job_vacancy_id":3,
        "created_at": "2023-10-27T15:15:32.000000Z",
        "updated_at": "2023-10-27T15:15:32.000000Z"
    }

### PUT /api/job-applies/:id

**Description**

Update a job apply

**Parameters**

    id:id

**Resquest**

    {
        "name": "daniel"
    }

**Response**

    {
        "name": "daniel",
        "email": "daniel@gmail.com",
        "user_id":2,
        "job_vacancy_id":3,
        "created_at": "2023-10-27T15:15:32.000000Z",
        "updated_at": "2023-10-27T15:15:32.000000Z"
    }

### DELETE /api/job-applies/:id

**Description**

Delete a job apply by id

**Parameters**

    id:id

## Vacancy Endpoints

### Get /api/job-vacancy

**Description**

Return all job vacancies resgistred in the database.

**Parameters**

No parameters needed.

**Response**

    {

    "title": "Mrs.",
    "description": "Ankunding and Sons",
    "salary": "3",
    "user_id": 2,
    "created_at": "2023-10-27T15:15:32.000000Z",
    "updated_at": "2023-10-27T15:15:32.000000Z"

    }

###Get /api/job-vacancy/:id

**Description**

Return a job vacancy for the id that resgistred in the database.

**Parameters**

No parameters needed.

**Response**

    {

    "title": "Mrs.",
    "description": "Ankunding and Sons",
    "salary": "3",
    "user_id": 2,
    "created_at": "2023-10-27T15:15:32.000000Z",
    "updated_at": "2023-10-27T15:15:32.000000Z"

    }

### POST /api/job-vacancy

**Description**

Create a new job apply

**Parameters**

No parameters needed.

**Resquest**

    {

    "title": "Mrs.",
    "description": "Ankunding and Sons",
    "salary": "3"

    }

**Response**

    {

    "title": "Mrs.",
    "description": "Ankunding and Sons",
    "salary": "3",
    "user_id": 2,
    "created_at": "2023-10-27T15:15:32.000000Z",
    "updated_at": "2023-10-27T15:15:32.000000Z"

    }

### PUT /api/job-vacancy/:id

**Description**

Update a job vacancy

**Parameters**

    id:id

**Resquest**

    {

    "title": "Mrs.",
    "description": "Ankunding and Sons",
    "salary": "3"

    }

**Response**

{

    "title": "Mrs.",
    "description": "Ankunding and Sons",
    "salary": "3",
    "user_id": 2,
    "created_at": "2023-10-27T15:15:32.000000Z",
    "updated_at": "2023-10-27T15:15:32.000000Z"

    }

### DELETE /api/job-applies/:id

**Description**

Delete a job apply by id

**Parameters**

    id:id
