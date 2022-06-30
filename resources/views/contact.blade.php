<x-layout>
<div class="contact">
    <div class="map">
      <div class="gmap_canvas">
        <iframe width="500" height="500" id="gmap_canvas"
          src="https://maps.google.com/maps?ll=56.95080979999999,24.1163132&q=University of Latvia&t=&z=15&ie=UTF8&iwloc=&output=embed">

        </iframe>
      </div>



      <div class="Form">
      @csrf

        <form id=form>
          <label for="NorN">Your Name:</label>
          <input type="text" id="NorN" name="NorN" placeholder="Name or Nickname">
          <br>
          <label for="Email:">Your email adress:</label>
          <input type="email" id="email" name="email" placeholder="Example@example.com" required value="{{ old('email') }}">
          @error('email')
                    <p>{{ $message }}</p>
                    @enderror
          <br>
          <label for="Problem">Theme</label>
          <select id="Theme" name="Theme" onchange="checkvalue(this.value)">
            <option value="Comment">Review</option>
            <option value="Site work">Site work</option>
            <option value="Other">Other</option>
          </select>
          <input type="text" name="Other" id="Other" style='display:none;' />
          <br>
          <label for="Review">Some Comment</label>
          <br>
          <textarea id="Review" name="Review" placeholder="Your text..."></textarea>
          <br>
        <button type='submit'>Submit</button>
        </form>

      </div>


    </div>
  </div>
</x-layout>