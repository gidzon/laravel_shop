@extends('layout.app')

@section('content')
    <div class="continer">
        <div class="row">
            <div class="col-10">
                <img src="" alt="" class="img-fluid">
                <p class="text-justify">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Natus vitae, explicabo vero quos esse vel et a voluptate 
                    reprehenderit eum nisi reiciendis placeat laborum debitis 
                    quam labore sunt exercitationem quidem voluptatum unde, cupiditate 
                    similique eligendi, aspernatur ducimus! Ratione, accusantium eligendi natus, 
                    ducimus delectus blanditiis in asperiores eum voluptatum voluptas et dicta architecto 
                    eius voluptates obcaecati voluptatem error pariatur maxime, 
                    fugiat fuga necessitatibus voluptatibus culpa quod? Velit, 
                    fugit libero tenetur sapiente, corrupti, corporis perferendis magni 
                    praesentium asperiores vitae soluta suscipit nisi facilis. Dolor nulla quidem, 
                    voluptatem incidunt voluptatibus quos aspernatur tempore dolorem voluptates 
                    ipsa tempora libero vitae sed sint obcaecati sunt possimus doloribus quibusdam, 
                    corrupti veritatis maxime minima iste. Incidunt explicabo ex ea consequatur, fuga 
                    delectus assumenda labore recusandae libero non deserunt inventore ipsa eum vitae 
                    asperiores aspernatur accusantium neque. Quas harum quam minus laboriosam facere accusamus 
                    expedita mollitia eveniet praesentium? Pariatur voluptas aliquid ut, dolorem expedita 
                    tempora recusandae ratione sit. Aut placeat dolorem enim tenetur veritatis minima ipsum 
                    distinctio iste. Laborum excepturi, odit illo voluptate exercitationem quam dolor fuga ut! 
                    Veritatis accusamus magnam maiores ut quam facere officia! Quas nostrum ipsam quae eligendi 
                    beatae, eaque minima soluta sit nihil ipsum, facilis quia ratione repellendus tenetur 
                    libero officia illum quasi quibusdam praesentium amet incidunt cupiditate nulla perspiciatis. 
                    Assumenda debitis quisquam quis deleniti similique laborum voluptatum aperiam odio facilis dolores, 
                    dolore ipsa sint quasi consequatur optio ducimus illo est impedit voluptate in! Id sint quos 
                    quibusdam tempore, doloremque, ab earum dolore deleniti veritatis nihil ipsa. Nemo rerum debitis 
                    perferendis iure sed repellendus, ipsa iste voluptatum ratione dolores quisquam, velit explicabo. 
                    Et doloremque cumque eum ab velit vitae praesentium recusandae harum architecto alias animi 
                    incidunt ipsa ex, ratione, enim inventore ipsam porro tempore rem deleniti magnam consequatur ducimus! 
                    Adipisci hic aut dolore eius, nulla quia doloremque esse earum iusto iste blanditiis accusantium 
                    consequuntur!
                </p>
                <p class="text-center">3200 рублей</p>
                <form action="{{route('cart.add.product')}}" method="POST">
                    <div class="form-group">
                        <input type="number" name="count" id="" class="form-control" placeholder="product count">
                        <input type="submit" name="submit" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
