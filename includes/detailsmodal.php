<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-labelledby="details-1" aria-hidden="true"><!--Start Details Modal -->
    <div class="modal-dialog modal-lg"><!--Start Modal Dialog -->
           <div class="modal-content"><!--Start Modal Content -->
            <div class="modal-header"><!--Start Modal Header -->
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title text-center">Levis Jeans</h4>
            </div><!--End Modal Header -->
            <div class="modal-body "><!--Start Modal Body -->
                <div class="container-fluid">
                    <div class="row">
                        <div class=" col-sm-6 ">
                            <div class="center-block">
                                <img src="images/products/men4.png" alt="Levis Jeans" class="details img-responsive">
                            </div>

                        </div>
                        <div class=" col-sm-6 ">
                            <h4>Details</h4>
                            <p>These jeans are amazing! They are straight leh, fit great and look sexy. Get a Pair while they last</p>
                            <hr>
                            <p>Price: $34.99</p>
                            <p>Brand: Levis</p>
                            <form action="add_cart.php" method="post">
                                <div class="form-group"><!--Start form group -->
                                    <div class="col-xs-3">
                                        <label for="quantity">
                                            Quantity:
                                        </label>
                                        <input type="text" class="form-control" id="quantity" name="quantity">
                                    </div>
                                    <p>Availble: 3</p>
                                </div><!--End form group -->
                                <br>
                               <div class="form-group"><!--Start form group -->

                                        <label for="size">
                                            Size:
                                        </label>
                                        <select  class="form-control" id="size" name="size">
                                        <option value=""></option>
                                        <option value="28">28</option>
                                        <option value="32">32</option>
                                        <option value="36">36</option>
                                        </select>

                                </div><!--End form group -->
                            </form>
                        </div>

                    </div>
                </div>
            </div><!--End Modal Body -->
            <div class="modal-footer"><!--Start Modal footer -->
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</button>


            </div><!--Start Modal footer -->
            </div><!--End Modal Content -->
    </div><!--End Modal Dialog -->
</div><!--End Modal Details -->
