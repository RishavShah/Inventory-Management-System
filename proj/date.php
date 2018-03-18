 <label for="checkin">
                                    Check In:
                                    </label>
                                    <div class='input-group date' id='datetimepicker6'>
                                        <input type='text' class="form-control" name="checkin"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>  
                        
                                <label for="checkin">
                                    Check Out:
                                </label>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker7'>
                                        <input type='text' class="form-control" name="checkout"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            
                        </div>
                        <script type="text/javascript">
                        var date = new Date();
                        
                        $(document).ready(function() {
                                $(function () {
                                    $('#datetimepicker6').datetimepicker({
                                        sideBySide: true,
                                        minDate: date,
                                        format: 'YYYY-MM-DD HH:mm:ss'
                                    });
                                    $('#datetimepicker7').datetimepicker({
                                        format: 'YYYY-MM-DD HH:mm:ss',
                                        sideBySide: true,
                                        minDate:date,
                                        useCurrent: false //Important! See issue #1075
                                    });
                                    $("#datetimepicker6").on("dp.change", function (e) {
                                        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
                                    });
                                    $("#datetimepicker7").on("dp.change", function (e) {
                                        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
                                    });
                                });
                            });
                        </script>