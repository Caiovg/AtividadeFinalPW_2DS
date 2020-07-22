$(function(){
    $('#login').submit(function(){
        var obj = this;
        var form = $(obj);
        var dados = new FormData(obj);
        $.ajax({
            url: form.attr('action'),
            type: form.attr('method'),
            data: dados,
            processData: false,
            cache: false,
            contentType: false,
            success: function(data){
                if(data == "ErroUser"){
                    Swal.fire({
                        title: 'Erro ao preencher campos!',
                        text: 'Campo Usuário ou Email vazio!',
                        icon: 'error',
                        confirmButtonText: 'Legal, vou refazer'
                    });
                }   
                if(data == "ErroPass"){
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        onOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      })
                      Toast.fire({
                        icon: 'error',
                        title: 'Campo Senha Obrigatório!'
                      });
                }   
                if(data == "SucessoCliente"){
                  Swal.fire({
                    title: 'Login realizado com sucesso!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                  }).then((result) => {
                    if (result.value){
                      window.location.replace("../view/TelaUsuario.php");
                    }
                  })
                }
                if(data == "SucessoFuncionario"){
                  Swal.fire({
                    title: 'Login realizado com sucesso!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                  }).then((result) => {
                    if (result.value){
                      window.location.replace("../view/TelaFuncionario.php");
                    }
                  });
                }
                if(data == "SucessoADM"){
                  Swal.fire({
                    title: 'Login realizado com sucesso!',
                    icon: 'success',
                    confirmButtonText: 'OK'
                  }).then((result) => {
                    if (result.value){
                      window.location.replace("../view/TelaAdm.php");
                    }
                  });
                }      
                if(data == "FalhaLogin"){
                  Swal.fire({
                    title: 'ERRO!',
                    text: 'Usuário ou senha inválidos!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                  });
                }   
            },//success
        });//ajax
        return false;
    });
});


$(function(){
  $('#CadastroProdutos').submit(function(){
    var obj = this;
    var form = $(obj);
    var dados = new FormData(obj);
    $.ajax({
      url: form.attr('action'),
      type: form.attr('method'),
      data: dados,
      processData: false,
      cache: false,
      contentType: false,
      success: function(data){
        if(data == "camposvazios"){
          Swal.fire({
              title: 'Erro ao preencher os campos!',
              text: 'Preencha todos os campos obrigatorios!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
          });
        }
        if(data == "ErroNome"){
          Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Nome Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
          });
        }
        if(data == "ErroNomeexiste"){
          Swal.fire({
            title: 'Erro ao preencher campos!',
            text: 'Produto já cadastrado!',
            icon: 'error',
            confirmButtonText: 'Legal, vou refazer'
          });
        } 
        if(data == "ErroCodbarras"){
          Swal.fire({
            title: 'Erro ao preencher campos!',
            text: 'Campo Codigo Barras Obrigatorio!',
            icon: 'error',
            confirmButtonText: 'Legal, vou refazer'
          });
        }
        if(data == "Erroletra"){
          Swal.fire({
            title: 'Erro ao preencher campos!',
            text: 'Campo Codigo Barras não pode conter letras ou caracteres especiais!',
            icon: 'error',
            confirmButtonText: 'Legal, vou refazer'
          });
        }
        if(data == "Erronumero"){
          Swal.fire({
            title: 'Erro ao preencher campos!',
            text: 'Campo Codigo Barras deve conter 13 digitos!',
            icon: 'error',
            confirmButtonText: 'Legal, vou refazer'
          });
        }
        if(data == "ErroCodbarrasexiste"){
          Swal.fire({
            title: 'Erro ao preencher campos!',
            text: 'Codigo de Barras já cadastrado!',
            icon: 'error',
            confirmButtonText: 'Legal, vou refazer'
          });
        }
        if(data == "ErroDescricao"){
          Swal.fire({
            title: 'Erro ao preencher campos!',
            text: 'Campo Descrição Obrigatorio!',
            icon: 'error',
            confirmButtonText: 'Legal, vou refazer'
          });
        }
        if(data == "ErroPreco"){
          Swal.fire({
            title: 'Erro ao preencher campos!',
            text: 'Campo Preço Obrigatorio!',
            icon: 'error',
            confirmButtonText: 'Legal, vou refazer'
          });
        }
        if(data == "Erroletra1"){
          Swal.fire({
            title: 'Erro ao preencher campos!',
            text: 'Campo Preço não pode conter letras ou caracteres especiais!',
            icon: 'error',
            confirmButtonText: 'Legal, vou refazer'
          });
        }
        if(data == "ErroEstoque"){
              Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Estoque Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
              });
          }
          if(data == "Erroletra2"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Estoque não pode conter letras ou caracteres especiais!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
        if(data == "ErroTipo"){
          Swal.fire({
            title: 'Erro ao preencher campos!',
            text: 'Campo Tipo Obrigatorio!',
            icon: 'error',
            confirmButtonText: 'Legal, vou refazer'
          });
        }
        if(data == "ErroBanco"){
          Swal.fire({
            title: 'Erro ao cadastrar!',
            text: 'Não foi possivel efetuar o cadastro!',
            icon: 'error',
            confirmButtonText: 'Legal, vou refazer'
          });
        }           
        if(data == "Sucesso"){
          Swal.fire({
            title: 'Cadastro realizado com sucesso!',
            icon: 'success',
            confirmButtonText: 'OK'
            });
        }   
      },//success
    });//ajax
    return false;
  });
});

$(function(){
    $('#Cadastro').submit(function(){
      var obj = this;
      var form = $(obj);
      var dados = new FormData(obj);
      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: dados,
        processData: false,
        cache: false,
        contentType: false,
        success: function(data){
          if(data == "ErroNome"){
            Swal.fire({
                title: 'Erro ao preencher campos!',
                text: 'Campo Nome Obrigatorio!',
                icon: 'error',
                confirmButtonText: 'Legal, vou refazer'
            });
          } 
          if(data == "ErroSobrenome"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Sobrenome Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroNomedoUsuario"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Nome do Usuário Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroUserNameExiste"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Nome do Usuario já cadastrado!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroCPF"){
                Swal.fire({
                title: 'Erro ao preencher campos!',
                text: 'Campo CPF Obrigatorio!',
                icon: 'error',
                confirmButtonText: 'Legal, vou refazer'
                });
            }
          if(data == "ErroCPFExiste"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'CPF já cadastrado!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroNascimento"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Nascimento Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroRG"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo RG Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroRGExiste"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'RG já cadastrado!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroCelular"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Celular Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroCelularExiste"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Celular já cadastrado!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }      
          if(data == "ErroEmail"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Email Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroEmailExiste"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Email já cadastrado!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroEndereco"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Endereço Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroNumero"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Numero Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "Erroletra"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Numero não pode conter letras ou caracteres especiais!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroSenha"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Senha Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          } 
          if(data == "ErroConfisenha"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Confirme sua Senha Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroSenhasDiferentes"){
              Swal.fire({
                title: 'Erro ao preencher campos!',
                text: 'As Senhas deve ser iguais!',
                icon: 'error',
                confirmButtonText: 'Legal, vou refazer'
                });
            }
            if(data == "ErroBanco"){
              Swal.fire({
                title: 'Erro ao cadastrar!',
                text: 'Não foi possivel efetuar o cadastro!',
                icon: 'error',
                confirmButtonText: 'Legal, vou refazer'
                });
            }           
          if(data == "Sucesso"){
            Swal.fire({
                title: 'Cadastro realizado com sucesso!',
                icon: 'success',
                confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value){
                    window.location.replace("../view/TelaLogin.php");
                }
            })
          }   
        },//success
      });//ajax
      return false;
    });
  });

  $(function(){
    $('#CadastroFuncionario').submit(function(){
      var obj = this;
      var form = $(obj);
      var dados = new FormData(obj);
      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: dados,
        processData: false,
        cache: false,
        contentType: false,
        success: function(data){
          if(data == "ErroNome"){
            Swal.fire({
                title: 'Erro ao preencher campos!',
                text: 'Campo Nome Obrigatorio!',
                icon: 'error',
                confirmButtonText: 'Legal, vou refazer'
            });
          } 
          if(data == "ErroSobrenome"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Sobrenome Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroNomedoUsuario"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Nome do Usuário Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroUserNameExiste"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Nome do Usuario já cadastrado!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroCPF"){
                Swal.fire({
                title: 'Erro ao preencher campos!',
                text: 'Campo CPF Obrigatorio!',
                icon: 'error',
                confirmButtonText: 'Legal, vou refazer'
                });
            }
          if(data == "ErroCPFExiste"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'CPF já cadastrado!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroNascimento"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Nascimento Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroRG"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo RG Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroRGExiste"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'RG já cadastrado!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroCelular"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Celular Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroCelularExiste"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Celular já cadastrado!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }      
          if(data == "ErroEmail"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Email Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroEmailExiste"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Email já cadastrado!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroEndereco"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Endereço Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroNumero"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Numero Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "Erroletra"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Numero não pode conter letras ou caracteres especiais!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroSenha"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Senha Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          } 
          if(data == "ErroConfisenha"){
            Swal.fire({
              title: 'Erro ao preencher campos!',
              text: 'Campo Confirme sua Senha Obrigatorio!',
              icon: 'error',
              confirmButtonText: 'Legal, vou refazer'
            });
          }
          if(data == "ErroSenhasDiferentes"){
              Swal.fire({
                title: 'Erro ao preencher campos!',
                text: 'As Senhas deve ser iguais!',
                icon: 'error',
                confirmButtonText: 'Legal, vou refazer'
                });
            }
            if(data == "ErroBanco"){
              Swal.fire({
                title: 'Erro ao cadastrar!',
                text: 'Não foi possivel efetuar o cadastro!',
                icon: 'error',
                confirmButtonText: 'Legal, vou refazer'
                });
            }           
          if(data == "Sucesso"){
            Swal.fire({
              title: 'Cadastro realizado com sucesso!',
              icon: 'success',
              confirmButtonText: 'OK'
            });
          }   
        },//success
      });//ajax
      return false;
    });
  });