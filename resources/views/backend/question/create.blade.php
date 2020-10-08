@extends('backendtemplate')

@section('content')
<h1>Create Question</h1>

<div class="row">
    <form action="{{route('question.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="InputSubject">Subject:</label>
            <select name="subject" class="form-control">
                <optiongroup label="--Select Subject--">
                    @foreach($subjects as $subject)
                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                    @endforeach
                </optiongroup>
            </select>
        </div>

        <div class="form-group"> 
            <textarea name="question" placeholder="Enter your question." cols="70" rows="7"></textarea>
        </div>

        <div class="form-group">
            <input type="radio" name="status" value="1" checked id="mutilbtn">MultiChoice &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input type="radio" name="status" value="0" id="tfbtn">True False
        </div>

        <div class="form-group" id="formultiplechoice">
            <div class="my-2">
                <label for="answerone" class="col-md-3">Answer One:</label>
                <input type="text" name="answerone" class="ans1" size="50px;">
            </div>
            <div class="my-2">
                <label for="answertwo" class="col-md-3">Answer Two:</label>
                <input type="text" name="answertwo" class="ans2" size="50px;">
            </div>
            <div class="my-2">
                <label for="answerthree" class="col-md-3">Answer Three</label>
                <input type="text" name="answerthree" class="ans3" size="50px;">
            </div>
            <div class="my-2">
                <label for="question" class="col-md-3">Answer Four</label>
                <input type="text" name="answerfour" class="ans4" size="50px;">
            </div>
            <div class="form-group">
                <label for="question" class="col-md-3">Right Answer</label>
                <select name="rightanswer">
                    <option>......This is right answer......</option>
                    <option  id="val1"></option>
                    <option  id="val2"></option>
                    <option  id="val3"></option>
                    <option  id="val4"></option>
                </select>
            </div>
        </div>

        <div class="form-group" id="fortruefalse">
            <div>
                <label for="question" class="col-md-3">Right Answer</label>
                <select name="rightanswer1">
                    <option>...This is right answer...</option>
                    <option value="true">True</option>
                    <option value="false">False</option>
                </select>
            </div>
        </div>

        <div class="form-group my-5">
            <button type="reset" class="btn btn-secondary text-uppercase mr-2"> 
                <i class="fas fa-times mr-2"></i> Cancel 
            </button>
            <button type="submit" class="btn btn-primary text-uppercase"> 
                <i class="fas fa-save mr-2"></i> Create
            </button>
        </div>

    </form>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
            // alert('0k');
            $('#fortruefalse').hide();
            $('#mutilbtn').click(function () {
                // alert('multi');
                $('#formultiplechoice').show();
                $('#fortruefalse').hide();

            });
            $('#tfbtn').click(function () {
                // alert('tf');
                $('#formultiplechoice').hide();
                $('#fortruefalse').show();
            });
            $('.ans1').keyup(function () {
                // alert($(this).val());
                $('#val1').html($(this).val());
                $('#val1').val($(this).val());
            });
            $('.ans2').keyup(function () {
                // alert($(this).val());
                $('#val2').html($(this).val());
                $('#val2').val($(this).val());
            });
            $('.ans3').keyup(function () {
                // alert($(this).val());
                $('#val3').html($(this).val());
                $('#val3').val($(this).val());
            });
            $('.ans4').keyup(function () {
                // alert($(this).val());
                $('#val4').html($(this).val());
                $('#val4').val($(this).val());
            });
        })
    </script>
    @endsection