<html>
 <body>
  <form action="add_user.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="host">Host:</label>
    <input type="text" id="host" name="host" required>
    <br>
    <label for="database">Database:</label>
    <input type="text" id="database" name="database" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <br>
    <label for="privileges">Select Privileges:</label><br>
    <label for="privileges">DATA</label><br>
    <input type="checkbox" id="select" name="privileges[]" value="SELECT">Select
    <input type="checkbox" id="insert" name="privileges[]" value="INSERT">Insert
    <input type="checkbox" id="update" name="privileges[]" value="UPDATE">Update
    <input type="checkbox" id="delete" name="privileges[]" value="DELETE">Delete
    <input type="checkbox" id="create" name="privileges[]" value="CREATE">Create<br><br>
    <label for="privileges">STRUCTURE</label><br>
    <input type="checkbox" id="alter" name="privileges[]" value="ALTER">Alter
    <input type="checkbox" id="index" name="privileges[]" value="INDEX">Index
    <input type="checkbox" id="Drop" name="privileges[]" value="DROP">Drop
    <input type="checkbox" id="Create Temporary Tables" name="privileges[]" value="Create Temporary Tables">Create Temporary Tables
    <input type="checkbox" id="show view" name="privileges[]" value="SHOW VIEW">Show view<br>
    <input type="checkbox" id="Create Routine" name="privileges[]" value="CREATION ROUTINE">Create Routine
    <input type="checkbox" id="Alter Routine" name="privileges[]" value="ALTER ROUTINE">Alter Routine
    <input type="checkbox" id="Execute" name="privileges[]" value="EXECUTE">Execute
    <input type="checkbox" id="Create View" name="privileges[]" value="CREATE VIEW">Create View
    <input type="checkbox" id="Event" name="privileges[]" value="EVENT">Event
    <input type="checkbox" id="Trigger" name="privileges[]" value="TRIGGER">Trigger<br><br>
    <label for="privileges">ADMINISTRATION</label><br>
    <input type="checkbox" id="Grant" name="privileges[]" value="GRANT">Grant
    <input type="checkbox" id="Super" name="privileges[]" value="SUPER">Super
    <input type="checkbox" id="Process" name="privileges[]" value="PROCESS">Process
    <input type="checkbox" id="Reload" name="privileges[]" value="RELOAD">Reload
    <input type="checkbox" id="Shutdown" name="privileges[]" value="SHUTDOWN">Shutdown
    <input type="checkbox" id="Show Databases" name="privileges[]" value="SHOW DATABASES">Show Databases
    <input type="checkbox" id="Lock Tables" name="privileges[]" value="LOCK TABLES">Lock Tables<br>
    <input type="checkbox" id="References" name="privileges[]" value="REFERENCES">References
    <input type="checkbox" id="Replication Client" name="privileges[]" value="REPLICATION CLIENT">Replication Client
    <input type="checkbox" id="Replication Slave" name="privileges[]" value="REPLICATION SLAVE">Replication Slave
    <input type="checkbox" id="Create User" name="privileges[]" value="CREATE USER">Create User<br>    
    
      <br>
    <input type="submit" value="Add User">
  </form>
 </body>
</html>