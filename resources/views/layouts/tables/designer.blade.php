@extends('layouts.index')
@section('content-title','Diseñador de mesas')
@section('content-subtitle','Editor')
@section('content')
    <div class="row">
        <div class="box">
            <div class="box-body" >
                <div class="row">
                    <div class="col-md-3">
                        <button class="btn btn-info btn-lg" onclick="addTable()">+Mesa</button>
                        <button class="btn btn-success btn-lg" onclick="saveImages()">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="canvas">
    </div>
    {{--<img src="img/mesa1.png" id="test" alt="xd.jpg">--}}

<script>
    var table=document.getElementById("test");
    var image;
    var id=1;
    var moving = false;
    var canvas=document.getElementById("canvas");

    table.addEventListener("mousedown",initialClick,false);

    function move(e){
        var newX = e.clientX - 50;
        var newY = e.clientY - 50;
        image.style.left = newX + "px";
        image.style.top = newY + "px";
    }

    function initialClick(e) {
        if(moving){
            document.removeEventListener("mousemove", move);
            moving = !moving;
            return;
        }
        moving = !moving;
        image = this;
        document.addEventListener("mousemove", move, false);
    }

    function addTable(){
        var elem=document.createElement("img");
        elem.src="img/mesa1.png";
        elem.id="table"+id;
        id=id+1;
        elem.style.position="absolute";
        elem.addEventListener("mousedown",initialClick,false);
        canvas.appendChild(elem);
    }

    function saveImages(){
        var imgs=document.getElementsByTagName("img");
        console.log(imgs);
    }
</script>
<style type="text/css">
    #test{
        position: absolute;
    }
</style>
@endsection