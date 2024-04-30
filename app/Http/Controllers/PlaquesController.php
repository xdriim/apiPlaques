<?php

namespace App\Http\Controllers;

use App\Models\PlacaFotov;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *             title="Documentació API Swagger de plaques fotovoltaiques", 
 *             version="1.0",
 *             description="Descripció"
 * )
 *
 * @OA\Server(url="http://127.0.0.1:8000/")
 */
class PlaquesController extends Controller
{
    /**
    * Llistat dels registres de totes les plaques fotovoltaiques
    * @OA\Get (
    *     path="/api/plaques",
    *     tags={"Plaques"},
    *     @OA\Response(
    *         response=200,
    *         description="ok",
    *         @OA\JsonContent(
    *             @OA\Property(
    *                 type="array",
    *                 property="rows",
    *                 @OA\Items(
    *                     type="object",
    *                     @OA\Property(
    *                         property="id",
    *                         type="number",
    *                         example="1"
    *                     ),
    *                     @OA\Property(
    *                         property="latitud",
    *                         type="float",
    *                         example="14.3"
    *                     ),
    *                     @OA\Property(
    *                         property="longitud",
    *                         type="float",
    *                         example="2.09"
    *                     ),
    *                     @OA\Property(
    *                         property="nom",
    *                         type="string",
    *                         example="IES Ernest Lluch"
    *                     ),
    *                     @OA\Property(
    *                         property="tipus_equipament",
    *                         type="string",
    *                         example="Educació"
    *                     ),
    *                     @OA\Property(
    *                         property="adreca",
    *                         type="string",
    *                         example="Carrer de la Diputació, 11-15"
    *                     ),
    *                     @OA\Property(
    *                         property="nom_barri",
    *                         type="string",
    *                         example="la Nova Esquerra de l'Eixample"
    *                     ),
    *                     @OA\Property(
    *                         property="energia_prod_kWh",
    *                         type="float",
    *                         example="32300.00"
    *                     ),
    *                     @OA\Property(
    *                         property="potencia_kWp",
    *                         type="float",
    *                         example="25.84"
    *                     ),
    *                     @OA\Property(
    *                         property="emissions_estalv_KgCo2eq",
    *                         type="int",
    *                         example="11628"
    *                     ),
    *                     @OA\Property(
    *                         property="created_at",
    *                         type="string",
    *                         example="2023-02-23T00:09:16.000000Z"
    *                     ),
    *                     @OA\Property(
    *                         property="updated_at",
    *                         type="string",
    *                         example="2023-02-23T12:33:45.000000Z"
    *                     )
    *                 )
    *             )
    *         )
    *     )
    * )
    */

    public function index()
    {
        return PlacaFotov::All();
    }

    /**
    * Registrar la informació d'una placa fotovoltaica
    * @OA\Post (
    *     path="/api/plaques",
    *     tags={"Plaques"},
    *     @OA\RequestBody(
    *         @OA\MediaType(
    *             mediaType="application/json",
    *             @OA\Schema(
    *                 @OA\Property(
    *                      type="object",
    *                      @OA\Property(
    *                          property="latitud",
    *                          type="float"
    *                      ),
    *                      @OA\Property(
    *                          property="longitud",
    *                          type="float"
    *                      ),
    *                      @OA\Property(
    *                          property="nom",
    *                          type="string"
    *                      ),
    *                      @OA\Property(
    *                          property="tipus_equipament",
    *                          type="string"
    *                      ),
    *                      @OA\Property(
    *                          property="adreca",
    *                          type="string"
    *                      ),
    *                      @OA\Property(
    *                          property="nom_barri",
    *                          type="string"
    *                      ),
    *                      @OA\Property(
    *                          property="energia_prod_kWh",
    *                          type="float"
    *                      ),
    *                      @OA\Property(
    *                          property="potencia_kWp",
    *                          type="float"
    *                      ),
    *                      @OA\Property(
    *                          property="emissions_estalv_KgCo2eq",
    *                          type="int"
    *                      )
    *                 ),
    *                 example={
    *                     "latitud":"41.38",
    *                     "longitud":"2.15",
    *                     "nom":"IES Ernest Lluch",
    *                     "tipus_equipament":"Educació",
    *                     "adreca":"Carrer de la Diputació, 11-15",
    *                     "nom_barri":"la Nova Esquerra de l'Eixample",
    *                     "energia_prod_kWh":"32300.00",
    *                     "potencia_kWp":"25.84",
    *                     "emissions_estalv_KgCo2eq":"11628",
    *                }
    *             )
    *         )
    *      ),
    *      @OA\Response(
    *          response=201,
    *          description="CREATED",
    *          @OA\JsonContent(
    *              @OA\Property(property="id", type="number", example=1),
    *              @OA\Property(property="latitud", type="float", example="41.38"),
    *              @OA\Property(property="longitud", type="float", example="2.15"),
    *              @OA\Property(property="nom", type="string", example="IES Ernest Lluch"),
    *              @OA\Property(property="tipus_equipament", type="string", example="Educació"),
    *              @OA\Property(property="adreca", type="string", example="Carrer de la Diputació, 11-15"),
    *              @OA\Property(property="nom_barri", type="string", example="la Nova Esquerra de l'Eixample"),
    *              @OA\Property(property="energia_prod_kWh", type="float", example="32300.00"),
    *              @OA\Property(property="potencia_kWp", type="float", example="25.84"),
    *              @OA\Property(property="emissions_estalv_KgCo2eq", type="int", example="11628"),
    *              @OA\Property(property="created_at", type="string", example="2023-02-23T00:09:16.000000Z"),
    *              @OA\Property(property="updated_at", type="string", example="2023-02-23T12:33:45.000000Z")
    *          )
    *      ),
    *      @OA\Response(
    *          response=422,
    *          description="UNPROCESSABLE CONTENT",
    *          @OA\JsonContent(
    *              @OA\Property(property="message", type="string", example="The latitud field is required."),
    *              @OA\Property(property="errors", type="string", example="Objecte d'errors"),
    *          )
    *      )
    * )
    */

    public function store(Request $request)
    {
        $request->validate([
            'latitud' => 'required',
            'longitud' => 'required',
            'nom' => 'required',
            'adreca' => 'required',
            'tipus_equipament' => 'required',
            'nom_barri' => 'required',
            'energia_prod_kWh' => 'required',
            'potencia_kWp' => 'required',
            'emissions_estalv_KgCo2eq' => 'required'
        ]);

        // dd($request->all());
        $placa = new PlacaFotov;
        $placa->latitud = $request->latitud;
        $placa->longitud = $request->longitud;
        $placa->nom = $request->nom;
        $placa->adreca = $request->adreca;
        $placa->tipus_equipament = $request->tipus_equipament;
        $placa->nom_barri = $request->nom_barri;
        $placa->energia_prod_kWh = $request->energia_prod_kWh;
        $placa->potencia_kWp = $request->potencia_kWp;
        $placa->emissions_estalv_KgCo2eq = $request->emissions_estalv_KgCo2eq;
        $placa->save();

        return $placa;
    }

    /**
    * Mostrar la informació d'una placa fotovoltaica
    * @OA\Get (
    *     path="/api/plaques/{id}",
    *     tags={"Plaques"},
    *     @OA\Parameter(
    *         in="path",
    *         name="id",
    *         required=true,
    *         @OA\Schema(type="string")
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="OK",
    *         @OA\JsonContent(
    *              @OA\Property(property="id", type="number", example=1),
    *              @OA\Property(property="latitud", type="float", example="41.41538711399405"),
    *              @OA\Property(property="longitud", type="float", example="2.1028800980567754"),
    *              @OA\Property(property="nom", type="string", example="Centre Cívic Vázquez Montalbán"),
    *              @OA\Property(property="tipus_equipament", type="string", example="Centre cívic"),
    *              @OA\Property(property="adreca", type="string", example="Reis Catòlics, 16-34"),
    *              @OA\Property(property="nom_barri", type="string", example="Vallvidrera, el Tibidabo i les Planes"),
    *              @OA\Property(property="energia_prod_kWh", type="float", example="28350"),
    *              @OA\Property(property="potencia_kWp", type="float", example="22.68"),
    *              @OA\Property(property="emissions_estalv_KgCo2eq", type="integer", example="10206"),
    *         )
    *     ),
    *      @OA\Response(
    *          response=404,
    *          description="NOT FOUND",
    *          @OA\JsonContent(
    *              @OA\Property(property="message", type="string", example="No s'ha pogut mostrar la informació de la placa fotovoltaica"),
    *          )
    *      )
    * )
    */

    public function show($id)
    {
        $placa = PlacaFotov::find($id);
        return $placa;
    }

    /**
    * Consulta de barris per les emissions estalviades (només superior al número indicat)
    * @OA\Get (
    *     path="/api/plaquess/{emissions}",
    *     tags={"Plaques", "Emissions"},
    *     @OA\Parameter(
    *         in="path",
    *         name="emissions",
    *         required=true,
    *         @OA\Schema(type="integer")
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="ok",
    *         @OA\JsonContent(
    *             @OA\Property(
    *                 type="array",
    *                 property="rows",
    *                 @OA\Items(
    *                     @OA\Property(
    *                         property="adreca",
    *                         type="string",
    *                         example="Carrer de la Diputació, 11-15"
    *                     ),
    *                     @OA\Property(
    *                         property="nom_barri",
    *                         type="string",
    *                         example="la Nova Esquerra de l'Eixample"
    *                     ),
    *                     @OA\Property(
    *                         property="emissions_estalv_KgCo2eq",
    *                         type="int",
    *                         example="11628"
    *                     )
    *                 )
    *             )
    *         )
    *     )
    * )
    */
    public function search($emissions)
    {
        $plaques = PlacaFotov::where('emissions_estalv_KgCo2eq', '>', $emissions)
                    ->select('adreca', 'nom_barri', 'emissions_estalv_KgCo2eq')
                    ->get();

        $response = [
            'rows' => $plaques
        ];
        return response()->json($response);
    }

    /**
    * Actualitzar la informació d'una placa fotovoltaica
    * @OA\Put (
    *     path="/api/plaques/{id}",
    *     tags={"Plaques"},
    *     @OA\Parameter(
    *         in="path",
    *         name="id",
    *         required=true,
    *         @OA\Schema(type="string")
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="OK",
    *         @OA\JsonContent(
    *              @OA\Property(property="id", type="number", example=1),
    *              @OA\Property(property="latitud", type="float", example="41.41538711399405"),
    *              @OA\Property(property="longitud", type="float", example="2.1028800980567754"),
    *              @OA\Property(property="nom", type="string", example="Centre Cívic Vázquez Montalbán"),
    *              @OA\Property(property="tipus_equipament", type="string", example="Centre cívic"),
    *              @OA\Property(property="adreca", type="string", example="Reis Catòlics, 16-34"),
    *              @OA\Property(property="nom_barri", type="string", example="Vallvidrera, el Tibidabo i les Planes"),
    *              @OA\Property(property="energia_prod_kWh", type="float", example="28350"),
    *              @OA\Property(property="potencia_kWp", type="float", example="22.68"),
    *              @OA\Property(property="emissions_estalv_KgCo2eq", type="integer", example="10206"),
    *         )
    *     ),
    *     @OA\Response(
    *         response=204,
    *         description="Placa fotovoltaica actualitzada correctament"
    *     ),
    *      @OA\Response(
    *          response=404,
    *          description="NOT FOUND",
    *          @OA\JsonContent(
    *              @OA\Property(property="message", type="string", example="No s'ha pogut actualitzar la informació de la placa fotovoltaica"),
    *          )
    *      )
    * )
    */
    public function update(Request $request, $id)
    {
        $request->validate([
            'latitud' => 'required',
            'longitud' => 'required',
            'nom' => 'required',
            'tipus_equipament' => 'required',
            'adreca' => 'required',
            'nom_barri' => 'required',
            'potencia_kWp' => 'required',
            'emissions_estalv_KgCo2eq'
        ]);

        $placa = PlacaFotov::find($id);

        $placa->latitud = $request->latitud;
        $placa->longitud = $request->longitud;
        $placa->nom = $request->nom;
        $placa->tipus_equipament = $request->tipus_equipament;
        $placa->adreca = $request->adreca;
        $placa->nom_barri = $request->nom_barri;
        $placa->energia_prod_kWh = $request->energia_prod_kWh;
        $placa->potencia_kWp = $request->potencia_kWp;
        $placa->emissions_estalv_KgCo2eq = $request->emissions_estalv_KgCo2eq;
        $placa->update();

        return $placa;
    }

    /**
    * Eliminar una placa fotovoltaica
    * @OA\Delete (
    *     path="/api/plaques/{id}",
    *     tags={"Plaques"},
    *     @OA\Parameter(
    *         in="path",
    *         name="id",
    *         required=true,
    *         @OA\Schema(type="string")
    *     ),
    *     @OA\Response(
    *         response=204,
    *         description="Placa fotovoltaica eliminat correctament"
    *     ),
    *      @OA\Response(
    *          response=404,
    *          description="NOT FOUND",
    *          @OA\JsonContent(
    *              @OA\Property(property="message", type="string", example="No s'ha pogut eliminar la placa fotovoltaica"),
    *          )
    *      )
    * )
    */

    public function destroy($id)
    {

        $placa = PlacaFotov::find($id);

        if(is_null($placa)){
            return response()->json('No es pot esborrar la placa, ja ha estat esborrada', 404);
        }

        $placa->delete();
        return response()->noContent();
    }
}