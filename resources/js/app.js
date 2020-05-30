/*The MIT License (MIT)

Copyright (c) 2017 www.netprogs.pl

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.*/


$(function () {
    $(".datepicker").datepicker();
});


$(function () {
    $(".autocomplete").autocomplete({
        source: ["London", "New York", "Warsaw", "Berlin", "Auckland", "Johannesburg", "Dubai"],
        minLength: 2,
        select: function (event, ui) {
            
//            console.log(ui.item.value);
        }


    });
});



//room.php
var eventDates = {};
var dates = ['02/15/2019', '02/16/2019', '02/25/2019'];
for (var i = 0; i <= dates.length; i++)
{
    eventDates[ new Date(dates[i])] = new Date(dates[i]);
}


$(function () {
    $("#avaiability_calendar").datepicker({
        onSelect: function (data) {

//            console.log($('#checkin').val());

            if ($('#checkin').val() == '')
            {
                $('#checkin').val(data);
            } else if ($('#checkout').val() == '')
            {
                $('#checkout').val(data);
            } else if ($('#checkout').val() != '')
            {
                $('#checkin').val(data);
                $('#checkout').val('');
            }

        },
        beforeShowDay: function (date)
        {
            //console.log(date);
            if (eventDates[date])
                return [false, 'unavaiable_date'];
            else
                return [true, ''];
        }


    });
});
