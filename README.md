#API Documentation

##introduction

REST API for web aplication of work, whit vacancies and applies of multipler work.

##Applies Endpoints

###Get /api/job-applies
**Description**
Return all job applies resgistred in the database.

**Parameters**
No parameters needed.

**Response**
    `{
       
        "nombre": "daniel",
        "email": "daniel@gmail.com",
        "user_id":2,
        "job_vacancy_id":3
        
    }`

###Get /api/job-applies/:id
**Description**
Return a job applies for that id resgistred in the database.

**Parameters**
No parameters needed.

**Response**
    `{
       
        "nombre": "daniel",
        "email": "daniel@gmail.com",
        "user_id":2,
        "job_vacancy_id":3
        
    }`

###POST /api/job-applies
**Description**
Create a new job apply

**Parameters**
No parameters needed.

**Resquest**
    `
    {
    "name": "daniel"
    }
    `
**Response**
    `{
    "nombre": "daniel",
    "email": "daniel@gmail.com",
    "user_id":2,
    "job_vacancy_id":3
    }`