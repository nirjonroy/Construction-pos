@extends('backend.layouts.master')

@section('title')
Dashboard Page - Admin Panel
@endsection

@section('admin-content')
<form action="{{route('purchase-store')}}" method="POST">
@csrf
<div class="form-group col-md-6">
    <label class="col-form-label">Supplier Name</label>
    <select class="custom-select" name="supplier_id">
        <option selected="selected">Select one</option>
        @foreach ($suppliers as $sup)
        <option value="{{$sup->id}}">{{$sup->name}}</option> 
        @endforeach

    </select>
  

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="error">{{$error}}</div>
        @endforeach
    @endif
</div>

<?php
            $timezone = "Asia/Colombo";
            date_default_timezone_set($timezone);
            $today = date("Y-m-d");
        ?>
<div class="card mb-4">
    <div class="card-body">
       <label>Date</label>
        <input type="date" name="date"  class="form-control col-md-4" required id="date" value="{{ $today }}">
    </div>
</div>

    
<div class="row" style="padding: 10px;">
        
    <div class="col-lg-12">
        <div class="container box">               
            <div class="form-group">
             <input type="text" name="name" id="name" class="form-control input-lg col-md-8" placeholder="Product Name"  style="margin-left: 16%;" />
             <div id="ProductList">
             </div>
            </div>
           
           </div>
        <table id="myTable" class="table table-bordered">
            <thead>
                <tr>
                    <td  id="id_Cliente">Product ID</td>
                    <td>Product Name</td>
                    <td>Product Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody id="data">
                
            </tbody>
            
        </table>
    </div>

    <div class="col-lg-12">
        <div class="container" >
            <div class="jumbotron" style="width: 100%; height:200px; text-align:center">

                <p class="total_quantity">Total QTY: </p> 
                <input type="hidden" class="total_quantity_val" name="total_quantity" value="0">

                <input type="hidden" class="total_price_val" name="total_price" value="0">
                
                <p class="total_price"> Total Ammount: </p> <br>             
            <br><br><br><br>
                <div class="form-group">
                                    <label class="" ></label>
                                    <div class="col-sm-10">
                                          <textarea class="form-control" name="description" placeholder="Enter Description" id="editor1" rows="10" cols="80">{{ old('description')}}</textarea>
                                          @if($errors->has('description'))
                                            <div class="error">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>
                                </div>
                  <input type="text" name="payment" class="form-control col-md-8" placeholder="Payment">          <br><br><br><br>

                <button class="btn btn-success">Create Purchase</button>

            </form>
            </div>
        </div>
        
    </div>
</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jcalculator/1403955268/jcalculator.min.js" integrity="sha512-f33VObKxjd+I64ZBlx9t9hXcE6GiomTtjhxFvDO7UEWS66fFF8lFl1pWcF546+3dnc2j+sc3CBaQYES/kUWCeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
$(document).ready(function(){




$(document).on('change','input.quantity', function(){
    var current_qty=$(this).val();
    var current_price=$(this).closest('tr').find('td.price').text();
    var total=current_qty * current_price;
    $(this).closest('tr').find('td.sub_total').text(total);

    findTotal();
})

 

 

});
</script>
<script type="text/javascript">
function findTotal(){
    var tot_qty=0;
    var tot_amount=0;

    $('#myTable tbody tr').each(function() {
       tot_qty += parseInt($(this).find('td input.quantity').val());
       tot_amount += Number($(this).find('td.sub_total').text());

    });
    $('p.total_quantity').text(tot_qty);
    $('input.total_quantity_val').val(tot_qty);
    $('p.total_price').text(tot_amount);
    $('input.total_price_val').val(tot_amount);
}

</script>




<script type="text/javascript">
    $("#myTable").on("click", "#DeleteButton", function() {
        $(this).closest("tr").remove();
        findTotal();
    });
        

</script>





<script type="text/javascript">
   $(function(){
    var arr=[];
    var url="{{ route('autocomplete.fetch') }}";
        $( "#name" ).autocomplete({
          source: function(request, response) {
              $.getJSON(url, {  term: request.term }, response);
              },
          minLength: 2,
          response: function(event,ui) {
            if (ui.content.length == 1)
            {
              ui.item = ui.content[0];
                $(this).data('ui-autocomplete')._trigger('select', 'autocompleteselect', ui);
                $(this).autocomplete('close');
            } else if (ui.content.length == 0) {
                    toastr.error('No Product Found');
            }
          },
          focus: function( event, ui ) {
            
          },
          select: function( event, ui ) {
            var key=ui.item.id;
            if (arr.indexOf(key)  == -1) {
                product_row(ui.item.id);
                arr.push(key);
            }
          }
        })
        .autocomplete( "instance" )._renderItem = function( ul, item ) {
              var string =  "<div>" + item.name;
              string += ' (' + item.price + ')' + "</div>";
              return $( "<li>" ).append(string).appendTo( ul );
          };
      });

    function product_row(product_id){

      $.ajax({
        method: "GET",
        url: "{{ route('prodcutStore')}}",
        async: false,
        data: {id:product_id},
        dataType: "json",
        success: function(result){
          if(result.success && result.view.length >0){
            
                $('#ProductList').fadeIn();  
                $('#data').append(result.view);
                findTotal();
          } else {
            toastr.error('No Item  Found From This User');
          }
        }
      });
    }

</script>

@endsection