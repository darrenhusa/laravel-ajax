<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="">
        <title>Laravel Ajax wit Axios</title>

    </head>
    <body>

      <h1>Laravel Ajax Axios</h1>

      <div id="category">

        <!-- <ul>
          <li v-for="skill in skills">@{{ skill }}</li>
        </ul> -->
        <label for="">Select Room Category</label>
        <select name="rooms_category_drop_down">
          <option v-for="category in room_categories">@{{ category }}</option>
        </select>
      </div>

      <div id="root">

        <!-- <ul>
          <li v-for="skill in skills">@{{ skill }}</li>
        </ul> -->
        <label for="">Select Room</label>
        <select name="rooms_drop_down">
          <option v-for="room in rooms">@{{ room }}</option>
        </select>
      </div>

      <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/vue"></script>
      <script src="/js/app.js"></script>
    </body>
</html>
