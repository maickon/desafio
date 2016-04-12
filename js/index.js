function get_produtos(path) {
    $.ajax({
        type: "GET",
        url: path,
        success: function (data) {
            data = JSON.parse(data)
            //console.log(data);
            ko.applyBindings(new AppViewModel(data));
        },
        error: function (error) {
            console.log(error);
        }
    });
  }

function AppViewModel(data) {
  var self = this;
  console.log(data);
  var count = Object.keys(data).length;
  for(var i=0; i<count; i++){
    self.produtos = ko.observableArray([
        { produto: data[0].nome },
        { produto: data[1].preco },
        { produto: data[2].estoque_inicial }
    ]);
  }

  self.addPerson = function() {
      self.produtos.push({ name: "New at " + new Date() });
  };

  self.removePerson = function() {
      self.produtos.remove(this);
  }
}

  get_produtos('db/database.php');
  //ko.applyBindings(new AppViewModel());
