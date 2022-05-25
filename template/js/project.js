$("#allsubmit").on("click", function () {
    $('.myforms').each(function () {
        $(this).submit();

    });
});


document.getElementById('addprojectbuypart').addEventListener('click', function () {
    //Try to get tbody first with jquery children. works faster!
    var tbody = $('#projectbuyparttable').children('tbody');
    var table = tbody.length ? tbody : $('#projectbuyparttable');
    var tr = $('#projectbuyparttable').children('tbody').children('tr');
    var projectindex = document.getElementById('model[project][0][projectname]').value;
    var projectsize = document.getElementById('model[project][0][projectsize]').value;
    var projectversion = document.getElementById('model[project][0][projectversion]').value;
    console.log(tr.length);
    if (tr.length > 0) {
        var i = tr.length;
    } else {
        var i = 0;
    }

    table.append('<tr> <input type="hidden" name="model[projectbuypart][' + i + '][id]" value=""> <input type="hidden" name="model[projectbuypart][' + i + '][projectsize]" value="' + projectsize + '"> <input type="hidden" name="model[projectbuypart][' + i + '][projectversion]" value="' + projectversion + '"> <input type="hidden" name="model[projectbuypart][' + i + '][projectid]" id="model[projectbuypart][' + i + '][projectid]" value="' + projectindex + '"> <td><input type="text" class="form-control" name="model[projectbuypart][' + i + '][buypartid]" id="model[projectbuypart][' + i + '][buypartid]" placeholder="" value="' + (i + 1) + '"> </td> <td><input type="text" class="form-control" name="model[projectbuypart][' + i + '][buypartname]" id="model[projectbuypart][' + i + '][buypartname]" placeholder="" value=""> </td> <td><input type="text" class="form-control" name="model[projectbuypart][' + i + '][buypartamount]" id="model[projectbuypart][' + i + '][buypartamount]" placeholder="" value=""> </td> <td><input type="text" class="form-control" name="model[projectbuypart][' + i + '][buypartsize]" id="model[projectbuypart][' + i + '][buypartsize]" placeholder="" value=""> </td> <td><input type="text" class="form-control" name="model[projectbuypart][' + i + '][buypartdima]" id="model[projectbuypart][' + i + '][buypartdima]" placeholder="" value=""> </td> <td><input type="text" class="form-control" name="model[projectbuypart][' + i + '][buypartdimb]" id="model[projectbuypart][' + i + '][buypartdimb]" placeholder="" value=""> </td> <td><input type="text" class="form-control" name="model[projectbuypart][' + i + '][buypartnotes]" id="model[projectbuypart][' + i + '][buypartnotes]" placeholder="" value=""> </td> </tr>');
});
document.getElementById('addprojectlaser').addEventListener('click', function () {
    //Try to get tbody first with jquery children. works faster!
    var tbody = $('#projectlasertable').children('tbody');
    var table = tbody.length ? tbody : $('#projectlasertable');
    var tr = $('#projectlasertable').children('tbody').children('tr');
    var projectindex = document.getElementById('model[project][0][projectname]').value;
    var projectsize = document.getElementById('model[project][0][projectsize]').value;
    var projectversion = document.getElementById('model[project][0][projectversion]').value;
    console.log(tr.length);
    if (tr.length > 0) {
        var i = tr.length;
    } else {
        var i = 0;
    }

    table.append('<tr> <input type="hidden" name="model[projectlaser][' + i + '][id]" value=""> <input type="hidden" name="model[projectlaser][' + i + '][projectid]" id="model[projectlaser][' + i + '][projectid]" value="' + projectindex + '"> <input type="hidden" name="model[projectlaser][' + i + '][projectsize]" id="model[projectlaser][' + i + '][projectsize]" value="' + projectsize + '"> <input type="hidden" name="model[projectlaser][' + i + '][projectversion]" id="model[projectlaser][' + i + '][projectversion]" value="' + projectversion + '"> <td><input type="text" class="form-control" name="model[projectlaser][' + i + '][laserpartid]" id="model[projectlaser][' + i + '][laserpartid]" placeholder="" value="' + (i + 1) + '"> </td> <td><input type="text" class="form-control" name="model[projectlaser][' + i + '][laserpartname]" id="model[projectlaser][' + i + '][laserpartname]" placeholder="" value="' + projectindex + '"> </td> <td><input type="text" class="form-control" name="model[projectlaser][' + i + '][laserpartamount]" id="model[projectlaser][' + i + '][laserpartamount]" placeholder="" value=""> </td> <td><input type="text" class="form-control" name="model[projectlaser][' + i + '][laserpartthickness]" id="model[projectlaser][' + i + '][laserpartthickness]" placeholder="" value=""> </td> <td><input type="text" class="form-control" name="model[projectlaser][' + i + '][laserpartnotes]" id="model[projectlaser][' + i + '][laserpartnotes]" placeholder="" value=""> </td> </tr>');
});
document.getElementById('addprojectturning').addEventListener('click', function () {
    //Try to get tbody first with jquery children. works faster!
    var tbody = $('#projectturningtable').children('tbody');
    var table = tbody.length ? tbody : $('#projectturningtable');
    var tr = $('#projectturningtable').children('tbody').children('tr');
    var projectindex = document.getElementById('model[project][0][projectname]').value;
    var projectsize = document.getElementById('model[project][0][projectsize]').value;
    var projectversion = document.getElementById('model[project][0][projectversion]').value;
    console.log(tr.length);
    if (tr.length > 0) {
        var i = tr.length;
    } else {
        var i = 0;
    }

    table.append('<tr> <input type="hidden" name="model[projectturning][' + i + '][id]" value=""> <input type="hidden" name="model[projectturning][' + i + '][projectid]" id="model[projectturning][' + i + '][projectid]" value="' + projectindex + '"> <input type="hidden" name="model[projectturning][' + i + '][projectversion]" id="model[projectturning][' + i + '][projectversion]" value="' + projectversion + '"> <input type="hidden" name="model[projectturning][' + i + '][projectsize]" id="model[projectturning][' + i + '][projectsize]" value="' + projectsize + '"> <td><input type="text" class="form-control" name="model[projectturning][' + i + '][turningpartid]" id="model[projectturning][' + i + '][turningpartid]" placeholder="" value="' + (i + 1) + '"> </td> <td><input type="text" class="form-control" name="model[projectturning][' + i + '][turningpartname]" id="model[projectturning][' + i + '][turningpartname]" placeholder="" value=""> </td> <td><input type="text" class="form-control" name="model[projectturning][' + i + '][turningpartamount]" id="model[projectturning][' + i + '][turningpartamount]" placeholder="" value=""> </td> <td><input type="text" class="form-control" name="model[projectturning][' + i + '][turningpartnotes]" id="model[projectturning][' + i + '][turningpartnotes]" placeholder="" value=""> </td> </tr>');
});
document.getElementById('addprojectmaterial').addEventListener('click', function () {
    //Try to get tbody first with jquery children. works faster!
    var tbody = $('#projectmaterialtable').children('tbody');
    var table = tbody.length ? tbody : $('#projectmaterialtable');
    var tr = $('#projectmaterialtable').children('tbody').children('tr');
    var projectindex = document.getElementById('model[project][0][projectname]').value;
    var projectsize = document.getElementById('model[project][0][projectsize]').value;
    var projectversion = document.getElementById('model[project][0][projectversion]').value;
    console.log(tr.length);
    if (tr.length > 0) {
        var i = tr.length;
    } else {
        var i = 0;
    }

    table.append('<tr> <input type="hidden" name="model[projectmaterial][' + i + '][id]" value=""> <input type="hidden" name="model[projectmaterial][' + i + '][projectid]" id="model[projectmaterial][' + i + '][projectid]" value="' + projectindex + '"> <input type="hidden" name="model[projectmaterial][' + i + '][projectsize]" id="model[projectmaterial][' + i + '][projectsize]" value="' + projectsize + '"> <input type="hidden" name="model[projectmaterial][' + i + '][projectversion]" id="model[projectmaterial][' + i + '][projectversion]" value="' + projectversion + '"> <td><input type="text" class="form-control" name="model[projectmaterial][' + i + '][materialid]" id="model[projectmaterial][' + i + '][materialid]" placeholder="" value="' + (i + 1) + '"> </td> <td><input type="text" class="form-control" name="model[projectmaterial][' + i + '][materialtype]" id="model[projectmaterial][' + i + '][materialtype]" placeholder="" value=""> </td> <td><input type="text" class="form-control" name="model[projectmaterial][' + i + '][materialamount]" id="model[projectmaterial][' + i + '][materialamount]" placeholder="" value=""> </td> <td><input type="text" class="form-control" name="model[projectmaterial][' + i + '][materialdimensiona]" id="model[projectmaterial][' + i + '][materialdimensiona]" placeholder="" value=""> </td> <td><input type="text" class="form-control" name="model[projectmaterial][' + i + '][materialdimensionb]" id="model[projectmaterial][' + i + '][materialdimensionb]" placeholder="" value=""> </td> <td><input type="text" class="form-control" name="model[projectmaterial][' + i + '][materiallength]" id="model[projectmaterial][' + i + '][materiallength]" placeholder="" value=""> </td></tr>');
});

