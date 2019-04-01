
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width" />
        <title>Make Reservation Form</title>
        <!-- <link asp-href-include="lib/bootstrap/dist/css/*.min.css" rel="stylesheet" /> -->
    </head>
    <body class="m-1 p-1">
        <h3>Make Reservation</h3>
        <form class="" action="index.html" method="post">
        <!-- <form asp-controller="Reservation" asp-action="GetValues" method="post"> -->
            <p>Booking room for Last, First</p>
            <p>
                STEP 1: Enter reservation details.  Click button to load the available rooms.
            </p>

            <div class="form-group">
                <label for="start_date">Start Date</label>
                <input type="date" name="start_date" id="start_date" value="" class="form-control">
            </div>

            <div class="form-group">
                <label for="end_date">End Date</label>
                <input type="date" name="end_date" id="end_date" value="" class="form-control">
            </div>

            <div class="form-group" id="room_category_drop_down">
                <label for="category">Room Category</label>
                <select for="category" name="category">
                  <option v-for="category in categories">@{{ category }}</option>
                </select>
            </div>

            <p>
                STEP 2 : Select room from drop-down below.  Save or cancel reservation.
            </p>

            <div class="form-group" id="room_drop_down">
                <label for="room">Room</label>
                <select for="room" name="room">
                  <option v-for="room in rooms">@{{ room }}</option>
                </select>
            </div>

            <div class="text-center">
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="" type="reset">Cancel</button>
            </div>

        </form>
    </body>
</html>
