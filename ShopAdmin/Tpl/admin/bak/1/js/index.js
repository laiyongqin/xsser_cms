$(window).load(function() {
    $('#loading').fadeOut();
});
$(document).ready(function() {
    $('body').css('display', 'none');
    $('body').fadeIn(500);
    $("#logo a, #sidebar_menu a:not(.accordion-toggle), a.ajx").click(function() {
        event.preventDefault();
        newLocation = this.href;
        $('body').fadeOut(500, newpage);
    });
    function newpage() {
        window.location = newLocation;
    }

});
$(document).ready(function() {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    var calendar = $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
                calendar.fullCalendar('renderEvent',
                {
                    title: title,
                    start: start,
                    end: end,
                    allDay: allDay
                },
                true // make the event "stick"
                );
            }
            calendar.fullCalendar('unselect');
        },
        editable: true,
        events: [
        {
            title: 'All Day Event',
            start: new Date(y, m, 1)
        },
        {
            title: 'Long Event',
            start: new Date(y, m, d+5),
            end: new Date(y, m, d+7)
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: new Date(y, m, d-3, 16, 0),
            allDay: false
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: new Date(y, m, d+4, 16, 0),
            allDay: false
        },
        {
            title: 'Meeting',
            start: new Date(y, m, d, 10, 30),
            allDay: false
        },
        {
            title: 'Lunch',
            start: new Date(y, m, d, 12, 0),
            end: new Date(y, m, d, 14, 0),
            allDay: false
        },
        {
            title: 'Birthday Party',
            start: new Date(y, m, d+1, 19, 0),
            end: new Date(y, m, d+1, 22, 30),
            allDay: false
        },
        {
            title: 'Click for PixelGrade',
            start: new Date(y, m, 28),
            end: new Date(y, m, 29),
            url: 'http://pixelgrade.com/'
        }
        ]
    });
});
$(document).ready(function() {
    var dontSort = [];
    $('#datatable_example thead th').each( function () {
        if ( $(this).hasClass( 'no_sort' )) {
            dontSort.push( {
                "bSortable": false
            } );
        } else {
            dontSort.push( null );
        }
    } );
    $('#datatable_example').dataTable( {
        "sDom": "<'row table_top_bar'<'row-fluid'>'<'to_hide_phone'>'f'<'>r>t<'row'>",
        "sDom": "<'row table_top_bar'<'row-fluid'<'to_hide_phone' f>>><'row'>",
        "aaSorting": [[ 4, "asc" ]],
        "bPaginate": false,
        "bJQueryUI": false,
        "aoColumns": dontSort
    } );
    $.extend( $.fn.dataTableExt.oStdClasses, {
        "s`": "dataTables_wrapper form-inline"
    } );
} );

$(function () {
    
    var sin = [], cos = [], tes = [];
    for (var i = 0; i < 14; i += 1) {
        sin.push([i, Math.sin(i)*Math.random()*0.9]);
        cos.push([i, Math.cos(i)*Math.random()*1.4]);
        tes.push([i, Math.cos(i)*Math.random()*0.4]);
    }
    var plot = $.plot($("#placeholder"),
        [  {
            data: sin, 
            label: "Google+", 
            color:"#ef4723", 
            shadowSize:0
        }, {
            data: cos, 
            label: "Envato", 
            color:"#a1d14d", 
            shadowSize:0
        },  {
            data: tes, 
            label: "Facebook", 
            color:"#4a8cf7", 
            shadowSize:0
        } ], {
            series: {
                lines: {
                    show: true, 
                    fill:true
                },
                points: {
                    show: true, 
                    fill:true
                },
            },
            grid: {
                hoverable: true, 
                clickable: true, 
                autoHighlight: false, 
                borderWidth:0,  
                backgroundColor: {
                    colors: ["#fff", "#fbfbfb"]
                }
            },
        yaxis: {
            min: -1.5, 
            max: 1.5
        },
    });
function showTooltip(x, y, contents) {
    $('<div id="tooltip">' + contents + '</div>').css( {
        position: 'absolute',
        display: 'none',
        top: y + 5,
        left: x + 5,
        border: '1px solid #ccc',
        padding: '2px 6px',
        'background-color': '#fff',
        opacity: 0.80
    }).appendTo("body").fadeIn(200);
}
var previousPoint = null;
$("#placeholder").bind("plothover", function (event, pos, item) {
    $("#x").text(pos.x.toFixed(2));
    $("#y").text(pos.y.toFixed(2));
    if (item) {
        if (previousPoint != item.dataIndex) {
            previousPoint = item.dataIndex;
            $("#tooltip").remove();
            var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2);
            showTooltip(item.pageX, item.pageY,
                item.series.label + " of " + x + " = " + y);
        }
    }
});
});
$(function () {
    var data = [];
    var series = Math.floor(Math.random()*5)+1;
    data[0] = {
        label: "Google+", 
        data:42, 
        color: "#cb4b4b"
    };
    data[1] = {
        label: "Envato", 
        data:27, 
        color: "#4da74d"
    };
    data[2] = {
        label: "Pinterest", 
        data:9, 
        color: "#edc240"
    };
    data[3] = {
        label: "Facebook", 
        data:22, 
        color: "#5e96ea"
    };
    // DONUT
    $.plot($("#donut"), data,
    {
        series: {
            pie: { 
                show: true,
                innerRadius: 0.42,
                highlight: {
                    opacity: 0.3
                },
                radius: 1,
                stroke: {
                    color: '#fff',
                    width: 4
                },
                startAngle: 0,
                combine: {
                    color: '#353535',
                    threshold: 0.05
                },
                label: {
                    show: true,
                    radius: 1,
                    formatter: function(label, series){
                        return '<div class="chart-label">'+label+'&nbsp;'+Math.round(series.percent)+'%</div>';
                    }
                }
            },
            grow: {
                active: false
            }
        },
        legend:{
            show:true
        },
        grid: {
            hoverable: true,
            clickable: true
        },
    });
});