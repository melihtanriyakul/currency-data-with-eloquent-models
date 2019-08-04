###  Add currencylayer API SDK via composer

    What is semver?

-   Semver, Semantic Versioning is a tool that is used for projects to communication what changes are made in a new release. Especially when a project is realized by a group of people it should be used because some changes might break the code which depends on a package in the project.

###
    Should composer.lock be committed or not?

-   composer.lock file keeps track of the versions of libraries that are used by a project. When doing a group project, it should be commited so that it can lock the versions of libraries to your project and any member of the group would use the same versions.

### Define a MySQL table to store the rates

    How do you set the PK and why?
	
-   I set the timestamp, the source currency and the destination currency combined as a PK. Because at a time there could be more than one source currency, and more than one destination currency for that source currency that's why I set both the timestamp and the source currency as a PK.

### 
    Currencies as string, Enum or create an String → Id mapping?
	
-   I used a reference table for String -> Id mapping because using string enables users to add non-existant currencies. Using Enum allows us to avoid this problem, this is an advantage and it's small(1-byte) as well but when there is a change in currency code or other currencies need to be added then it would be quite expensive to revise the table. Even though only EUR, USD and CHF are used here, other currencies might be added later on. And String -> Id mapping is quite used and well-known pattern so other developer easily recognize when they see it and that's why I used String -> Id mapping. 

###
    What MySQL data type do you use for money? Float or Decimal? Why?
	
-   I used Decimal instead of Float because Float is used to store approximated values instead of exact values. Therefore, to store the currency rates precisely one should use Decimal. 


### Store rates into this table

    mysqli or PDO

-   In Laravel, PDO is used to access to database. It's lightweight and consistent interface.

###
    What are the advantages of prepared statements?


-   It's pre compiled statement so the SQL statement is compiled ahead and stored in the object. And it can be executed over and over again.

###
    SQL injection: What is the conceptual difference between using prepared statements and escaping the data using the quote/escape function


-   Using prepared statements is the best practice and more secure because SQL injection are subject to SQL injection attacks.
