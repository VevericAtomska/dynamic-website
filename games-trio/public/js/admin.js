function show(){
    model = document.getElementById('entry_articale');
    entry_tag = document.getElementById('entry_tag');

    if (model.style.display == '')
    {
        model.style.display = 'none';
        entry_tag.innerHTML = 'Show form';
    }
    else
    {
        model.style.display = '';
        entry_tag.innerHTML = 'Hide pattern';
    }
}

/*
 model = document.getElementById('entry_articale');
    entry_tag = document.getElementById('entry_tag');

    if (model.style.display == '')
    {
        model.style.display = 'none';
        entry_tag.innerHTML = 'Show form';
    }
    else
    {
        model.style.display = '';
        entry_tag.innerHTML = 'Hide pattern';
    }
 */