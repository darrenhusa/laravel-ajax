
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="viewport" content="width=device-width" />
        <title>Make Reservation Form</title>
        <!-- <link asp-href-include="lib/bootstrap/dist/css/*.min.css" rel="stylesheet" /> -->
    </head>
    <body class="m-1 p-1">
        <h3>Make Reservation</h3>
        <form action="/load_available_rooms" method="get">
        <!-- <form asp-controller="Reservation" asp-action="GetValues" method="post"> -->
            <p>Booking room for Last, First</p>
            <p>
                STEP 1: Enter the reservation details.
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
                <select name="category" id="category">
                  <option v-for="category in room_categories">@{{ category }}</option>
                </select>
            </div>

            <p>
                STEP 2 : Select room from drop-down below.  Save or cancel reservation.
            </p>

            <div class="form-group" id="room_drop_down">
                <label for="room">Room</label>
                <select name="room" id="room">
                  <option v-for="room in rooms">@{{ room }}</option>
                </select>
            </div>

            <div class="text-center">
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="" type="reset">Cancel</button>
            </div>
            <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/vue"></script>
            <script src="/js/my_app.js"></script>
        </form>
    </body>
</html>
