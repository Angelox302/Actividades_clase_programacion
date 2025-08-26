lista_clientes = []

opcion = -1
while opcion != 0:
    print("""
    Menu
    1. ingresar clientes
    2. deudas de clientes
    0. salir
    """)
    opcion = int(input("Ingrese una de las opciones del menu: "))
    cuotas_necesarias = 12
    

    if opcion == 0:
        print("Gracias por usar el programa")
    elif opcion == 1:
        nombre = input("ingrese el nombre del cliente: ")
        cuotas_pagadas = int(input("Ingrese cuantas cuotas ha pagado: "))
        lista_clientes.append(nombre)
        clientes = {
            "nombre" : nombre,
            "cuotas pagadas" : cuotas_pagadas
        }
        lista_clientes.append (clientes)
        print("cliente agragado")
    elif opcion == 2:
        deuda = cuotas_necesarias - cuotas_pagadas
        if len(lista_clientes) <= 0:
            print("la lista esta vacia")
        elif cuotas_pagadas >= cuotas_necesarias:
            print("los clientes no tienen deudas")
        else:
            print(f"{clientes} tiene una deuda de {deuda} cuotas")
    else:
        print("Digite una opcion correcta")


