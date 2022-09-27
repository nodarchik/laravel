<form method="post" action="/listings">
    @csrf
   <input type="text" name="name" placeholder="Name">
    @error('name')
    <p>{{$message}}</p>
    @enderror
   <select name="country">
       <option value="none" selected disabled hidden>Country</option>
       <option value="georgia">Georgia</option>
       <option value="usa">USA</option>
       <option value="uk">UK</option>
       <option value="germany">Germany</option>
       <option value="italy">Italy</option>
   </select>
    @error('country')
    <p>{{$message}}</p>
    @enderror
    <input type="date" name="date">
    @error('date')
    <p>{{$message}}</p>
    @enderror
    <button type="submit">Submit</button>
</form>
