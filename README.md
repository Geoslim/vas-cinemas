## VAS Cinemas
VAS Cinemas has 3 different cinemas across Lagos, each cinemas has their
respective showtimes for each movies available. This is a
minimalist application showing the list of movies with  different
showtimes in each cinemas and provision for adding them from  a user
authenticated page. Code reflects the following:

1. Use of repository pattern as an additional layer between the model 
and the controller

2. Use the Eloquent ORM relationships for the entities

3. Represent each of the entities (i.e. users, showtimes, cinemas, 
movies) as its own Laravel module (Optional but recommended).


Run
php artisan migrate:fresh --seed