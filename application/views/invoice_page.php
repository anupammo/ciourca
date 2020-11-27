    <header class="bg-primary py-5">
        <h1 class="text-center text-white display-3 my-3">Our CA</h1>
    </header>
    <section class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="<?php echo base_url(); ?>index.php/welcome/invoice_form">
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <input type="text" class="form-control shadow-none" name="idesc" placeholder="Item Description">
                            </div>
                            <div class="col-md-2 mb-2">
                                <input type="number" class="form-control shadow-none" name="irate" placeholder="Item Rate">
                            </div>
                            <div class="col-md-2 mb-2">
                                <input type="number" class="form-control shadow-none" name="iqty" placeholder="Item Quantity">
                            </div>
                            <div class="col-md-2 mb-2">
                                <select class="form-control shadow-none">
                                    <option selected>Tax</option>
                                    <option>None</option>
                                    <option>6%</option>
                                    <option>12%</option>
                                    <option>18%</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <textarea class="form-control shadow-none" name="idtls" placeholder="Item Details"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-2">
                                <!-- <button type="submit" name="additems" class="text-uppercase btn btn-primary shadow-none px-5">Submit</button> -->
                                <input type="submit" value="Submit" name="additems" class="text-uppercase btn btn-primary shadow-none px-5">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>