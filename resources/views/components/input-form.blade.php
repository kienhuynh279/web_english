<div class="form-group {{$classGroup}}">
    <label for="{{$name}}">{{$label}}</label>
    <input 
        type="{{$type}}" 
        
        class="form-control {{$class}} @error($name) is-invalid @enderror" 
        
        id="{{$name}}" 
        
        name="{{$name}}"
        
        placeholder="{{$placeholder}}"
        
        value="{{!old($name) ? $value ?? "" ? $value : old($name) : old($name)}}"
        
        {{$attributes}}
        >
</div>