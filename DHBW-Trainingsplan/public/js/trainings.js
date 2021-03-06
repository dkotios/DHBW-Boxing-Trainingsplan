 module.exports = function(app) {

     app.get('/trainingsList', function(req, res) {
         // load up the activity model
         var Training = require('./models/training');
         // query db for all activities
         Training.find( function ( err, items, count ){
             res.render( 'trainingList', {
                 title           : 'Trainings',
                 traininglist    : items
             });
         });
     });

	/* GET New Training page. */
    app.get('/newTraining', function(req, res) {
        res.render('newTraining', { title: 'Add New Training' });
    });

	/* POST to Add User Service */
    app.post('/addTraining', function(req, res) {

        // load up the activity model
        var Training = require('./models/training');

        // create a new activity object
    	var newTrain = new Training();

        // Get our form values. These rely on the "name" attributes
        newTrain.nameOfTraining = req.body.nameOfTraining;
        newTrain.route = req.body.route;
        newTrain.exercise.nameOfExercise1 = req.body.nameOfExercise1;
        newTrain.exercise.nameOfExercise2 = req.body.nameOfExercise2;
        newTrain.exercise.nameOfExercise3 = req.body.nameOfExercise3;
        newTrain.sets = req.body.sets;
        newTrain.repeats = req.body.repeats;

        // Submit to the DB
        newTrain.save(function (err, doc) {
            if (err) {
                // If it failed, return error
                res.send("There was a problem adding the information to the database.");
            }
            else {
                // And forward to success page
                res.redirect("trainingsList");
            }
        });
    });
}
