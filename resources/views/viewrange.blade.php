<form id="rates">
    <tr>
        <td>
            <label for="rate1">rate1</label>
        </td>
        <td>
            <input type="number" id="rate1" value="{{ $priceRange->rate1 ?? '' }}" required/>
        </td>
    </tr>
    <tr>
        <td>
            <label for="rate2">rate2</label>
        </td>
        <td>
            <input type="number" id="rate2" value="{{ $priceRange->rate2 ?? '' }}" required/>
        </td>
    </tr>
    <tr>
        <td>
            <label for="rate3">rate3</label>
        </td>
        <td>
            <input type="number" id="rate3" value="{{ $priceRange->rate3 ?? '' }}" required/>
        </td>
    </tr>
    <tr>
        <td>
            <label for="rate4">rate4</label>
        </td>
        <td>
            <input type="number" id="rate4" value="{{ $priceRange->rate4 ?? '' }}" required/>
        </td>
    </tr>
    <tr>
        <td>
            <button type="submit" form="rates" value="submit">Submit</button>
        </td>
    </tr>
</form>