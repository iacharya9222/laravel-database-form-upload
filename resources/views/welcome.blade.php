<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Price Rage</title>
<style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 50%;
        margin: auto;
        
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        box-shadow: 10px;
        }

        tr:nth-child(even) {
        background-color: #7d93ff;
        }
</style>
</head>
<body>

<table>
<form action="/register"  method="POST" id="rates">
        @csrf
        <tr>
        <th>Rates Name</th>
        <th>Rates Value</th>
        </tr>
        <tr>
        <td>
                <label for="rate1">rate1</label>
        </td>
        <td>
                <input name="rate1" type="number" id="rate1" />
                @error('rate1')
                <p> {{$message}}</p>
                @enderror
        </td>
        </tr>
        <tr>
        <td>
                <label for="rate2">rate2</label>
        </td>
        <td>
                <input name="rate2" type="number" id="rate2" />
                @error('rate2')
                <p> {{$message}}</p>
                @enderror
        </td>
        </tr>
        <tr>
        <td>
                <label for="rate3">rate3</label>
        </td>
        <td>
                <input name="rate3" type="number" id="rate3" />
                @error('rate3')
                <p> {{$message}}</p>
                @enderror
        </td>
        </tr>
        <tr>
        <td>
                <label for="rate4">rate4</label>
        </td>
        <td>
                <input name="rate4" type="number" id="rate4" />
                @error('rate1')
                <p> {{$message}}</p>
                @enderror
        </td>
        </tr>
        <tr>
        <td>
                <button type="submit" form="rates" value="submit">Submit</button>
        </td>
        </tr>
</form>
</table>

</body>
</html>
