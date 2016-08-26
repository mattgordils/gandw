'use strict';

var $ = require('jquery');

var global = {
  init: function(){
    
  },

  ready: function(){
    $('html').addClass('loaded');
  },
  
  resize:function(){
  },
  
  scroll: function(){
  }

};
module.exports = global;