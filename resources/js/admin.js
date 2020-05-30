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

var eventDates = {};
var datesConfirmed = ['02/12/2019', '02/15/2019', '02/23/2019'];
var datesnotConfirmed = ['02/13/2019', '02/14/2019', '02/20/2019', '02/21/2019'];



for (var i = 0; i < datesConfirmed.length; i++)
{
    eventDates[ datesConfirmed[i] ] = 'confirmed';
}

var tmp = {};
for (var i = 0; i < datesnotConfirmed.length; i++)
{
    tmp[ datesnotConfirmed[i] ] = 'notconfirmed';
}


Object.assign(eventDates, tmp);


$(function () {
    $(".reservation_calendar").datepicker({
        onSelect: function (data) {

            var a = $(this).attr('id');

            $('.hidden_' + a).hide();
            $('.loader_' + a).show();

            setTimeout(function () {

                $('.loader_' + a).hide();
                $('.hidden_' + a).show();

            }, 1000);

        },
        beforeShowDay: function (date)
        {
            var tmp = eventDates[ $.datepicker.formatDate('mm/dd/yy', date)];
//            console.log(tmp);
            if (tmp)
            {
                if (tmp == 'confirmed')
                    return [true, 'reservationconfirmed'];
                else
                    return [true, 'reservationnotconfirmed'];
            } else
                return [false, ''];

        }


    });
});
