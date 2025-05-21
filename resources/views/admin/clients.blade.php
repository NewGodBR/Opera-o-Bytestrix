@extends('layouts.admin')
@section('content')
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>{{__('messages.Clients')}}</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="{{ route('admin.index') }}">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Clientes</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <div class="flex items-center justify-between gap10 flex-wrap">
                    <div class="wg-filter flex-grow">
                        <form class="form-search">
                            <fieldset class="name">
                                <input type="text" placeholder="{{__('messages.Search here...')}}" class="" name="name" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="wg-table table-all-user">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th style="width:70px">{{__('messages.ClienteNo')}}</th>
                                <th class="text-center">{{__('messages.Name')}}</th>
                                <th class="text-center">{{__('messages.userId')}}</th>
                                <th class="text-center">{{__('messages.e-mail')}}</th>
                                <th class="text-center">{{__('messages.Gender')}}</th>
                                <th class="text-center">{{__('messages.Address')}}</th>
                                <th class="text-center">{{__('messages.Client type')}}</th>
                                <th class="text-center">{{__('messages.birth date')}}</th>
                                <th class="text-center">{{__('messages.Postal code')}}</th>
                                <th class="text-center">{{__('messages.City')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td class="text-center">{{ $client->id }}</td>
                                    <td class="text-center">{{ $client->name }}</td>
                                    <td class="text-center">cpf/cnpj</td>
                                    <td class="text-center">{{ $client->email }}</td>
                                    <td class="text-center">{{ $client->gender }}</td>
                                    <td class="text-center">{{ $client->birth_date }}</td>
                                    <td class="text-center">{{ $client->client_type }}</td>
                                    <td class="text-center">{{ $client->address }}</td>
                                    <td class="text-center">{{ $client->postal_code }}</td>
                                    <td class="text-center">{{ $client->city }}</td>
                                    <td class="text-center">
                                        <a href="#">
                                            <div class="list-icon-function view-icon">
                                                <div class="item eye">
                                                    <i class="icon-eye"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                    {{ $clients->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection
