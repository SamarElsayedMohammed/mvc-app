<form autocomplete="off" class="appForm clearfix" method="post" enctype="application/x-www-form-urlencoded">
    <fieldset>
        <legend>employee information</legend>
        <div class="input_wrapper n40 border">
            <label>name</label>
            <input required type="text" name="name" id="name" maxlength="50">
        </div>
        <div class="input_wrapper n40 padding border">
            <label>address</label>
            <input required type="text" id="address" name="address" maxlength="100">
        </div>
        <div class="input_wrapper_other n20 padding">
            <label>gender</label>
            <label class="radio">
                <input required type="radio" name="gender" id="gender" value="1">
                <div class="radio_button"></div>
                <span>Mal</span>
            </label>
            <label class="radio">
                <input required type="radio" name="gender" id="gender" value="2">
                <div class="radio_button"></div>
                <span>Femal</span>
            </label>
        </div>
        <div class="input_wrapper n30 border">
            <label>age</label>
            <input required type="number" min="22" max="60" name="age" id="age">
        </div>
        <div class="input_wrapper n20 padding border">
            <label>salary</label>
            <input required type="number" id="salary" step="0.01" name="salary" min="1500" max="9000">
        </div>
        <div class="input_wrapper n20 padding border">
            <label>tax</label>
            <input required type="number" id="tax" step="0.01" name="tax" min="1" max="5">
        </div>
        <div class="input_wrapper_other n30 padding select">
            <select required name="type" id="type">
                <option value="">employee type</option>
                <option value="1">part time</option>
                <option value="2">full time</option>
            </select>
        </div>
        <div class="input_wrapper_other">
            <label>operating system</label>
            <label class="checkbox block">
                <input type="checkbox" name="os[]" id="os" value="1">
                <div class="checkbox_button"></div>
                <span>windows</span>
            </label>
            <label class="checkbox block">
                <input type="checkbox" name="os[]" id="os" value="2">
                <div class="checkbox_button"></div>
                <span>linux</span>
            </label>
            <label class="checkbox block">
                <input type="checkbox" name="os[]" id="os" value="3">
                <div class="checkbox_button"></div>
                <span>mac></span>
            </label>
        </div>
        <div class="input_wrapper_other">
            <label>notes</label>
            <textarea name="notes" id="notes" cols="30" rows="10"></textarea>
        </div>
        <input class="no_float" type="submit" name="submit" value="save">
    </fieldset>
</form>