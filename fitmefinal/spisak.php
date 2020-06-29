
<!DOCTYPE html>
<html lang="en">
  <head>
   <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
	
	
	
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Todo list</title>
    <link
      href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="spisak.css" />
    <script defer src="script.js"></script>
  </head>

  <body>
  
    <h1 class="title">Dobro dosli u vas spisak za kupovinu</h1>

    <div class="all-tasks">
      <h2 class="task-list-title">Prodavnice</h2>
      <ul class="task-list" data-lists></ul>

      <form action="" data-new-list-form>
        <input 
          type="text"
          class="new list"
          data-new-list-input
          placeholder="Unesite prodavnicu"
          aria-label="new list name"
        />
        <button class="btn create" aria-label="create new list">+</button>
      </form>
    </div>

    <div class="todo-list" data-list-display-container>
      <div class="todo-header">
        <h2 class="list-title" data-list-title>Neki spisak</h2>
        <p class="task-count" data-list-count>0 namirnica</p>
      </div>

      <div class="todo-body">
        <div class="tasks" data-tasks></div>

        <div class="new-task-creator">
            <form action="" data-new-task-form>
                <input 
                  type="text"
                  data-new-task-input
                  class="new task"
                  placeholder="Unesite namirnicu"
                  aria-label="Naziv nove namirnice"
                />
                <button class="btn create" aria-label="create new task">+</button>
              </form>
        </div>

        <div class="delete-stuff">
          <button class="btn delete" data-clear-complete-tasks-button>Izbrisi kupljene namirnice</button>
          <button class="btn delete" data-delete-list-button>Izbrisi ceo spisak</button>
		  
        </div>
		
      </div>
	  
    </div>
<button class="dugmestil"><a href="profil.php">Povratak na stranu profila</button>
   
    </div>
    <template id="task-template">
      <div class="task">
        <input type="checkbox" />
        <label>
          <span class="custom-checkbox"></span>
        </label>
      </div>
    </template>
	
	
	
  </body>
</html>
<script src="spisak.js"></script>
 
