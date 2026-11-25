
export default function InputText({
  id,
  name,
  label,
  placeholder,
  type,
  value,
  onChange,
  error
}) {
  return (
    <div className="flex flex-col mb-3 gap-1">
      <label htmlFor={id} className="font-semibold text-sm">
        {label}
      </label>

      <input
        id={id}
        name={name}
        type={type}
        value={value}
        onChange={onChange}
        placeholder={placeholder}
        className={`border p-2 rounded-lg outline-none focus:ring-2
          ${error ? "border-red-500 focus:ring-red-200" : "border-gray-300 focus:ring-blue-200"}`}
      />

      {error && (
        <p className="text-red-500 text-xs">{Array.isArray(error) ? error[0] : error}</p>
      )}
    </div>
  );
}
